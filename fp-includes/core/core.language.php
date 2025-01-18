<?php

function lang_load($postfix = null) {
	global $fp_config;

	$pluginpath = '';

	// checks if we already loaded this lang file
	$old_lang = &$GLOBALS ['lang'];

	if (!$old_lang) {
		$old_lang = array();
	}

	if ($postfix) {

		if (strpos($postfix, 'plugin:') === 0) {
			$pluginpath = substr($postfix, 7);
		}

		$file = "lang." . $postfix . ".php";
	} else {

		$postfix = 'default';
		$file = "lang.default.php";
	}

	$fpath = LANG_DIR . $fp_config ['locale'] ['lang'] . "/" . $file;
	$fallback = LANG_DIR . LANG_DEFAULT . "/" . $file;

	$path = '';
	$plugin = $pluginpath;

	if ($pluginpath) {
		if (($n = strpos($pluginpath, '/')) !== false) {
			$plugin = substr($plugin, 0, $n - 1);
			$path = substr($plugin, $n + 1);
			$path = str_replace('/', '.', $path);
		}

		$dir = plugin_getdir($plugin);

		$fpath = $dir . "lang/lang." . $fp_config ['locale'] ['lang'] . $path . ".php";
		$fallback = $dir . "lang/lang." . LANG_DEFAULT . $path . ".php";
	}

	if (!file_exists($fpath)) {
		/* if file does not exist, we fall back on English */
		if (!file_exists($fallback)) {
			trigger_error("No suitable language file was found <b>" . $postfix . "</b>", E_USER_WARNING);
			return;
		}

		$fpath = $fallback;
	}

	/* load $lang from file */

	/*
	 * utf encoded files may output whitespaces known as BOM, we must
	 * capture this chars
	 */

	ob_start();

	include_once ($fpath);

	if (!isset($lang)) {
		return $GLOBALS ['lang'];
	}

	ob_end_clean();

	$GLOBALS ['lang'] = array_merge_recursive($lang, $old_lang);

	return $GLOBALS ['lang'];
}

function lang_getconf($id) {
	global $lang;

	$fpath = LANG_DIR . $id . "/lang.conf.php";
	if (file_exists($fpath)) {
		include ($fpath);
		return $langconf;
	} else {
		trigger_error("Error loading config for language \"" . $file . "\"", E_USER_WARNING);
	}
}

class lang_indexer extends fs_filelister {

	var $_directory = LANG_DIR;

	function _checkFile($directory, $file) {
		if (is_dir($directory . "/" . $file)) {
			if (!preg_match('![a-z]{2}-[a-z]{2}!', $file)) {
				return 0;
			}
			$this->_list [$file] = lang_getconf($file);
		}

		return 0;
	}

}

function lang_list() {
	$obj = new lang_indexer();
	return $obj->getList();
}

/**
 * Localize Smarty function {html_select_date} with LC_TIME
 *
 * Hint: The character set and coding must be installed on the web server (locale -a),
 * otherwise there will be display problems with non-ASCII characters.
 */
function set_locale() {
	global $fp_config;

	$langconf = [];
	$localeCharset_a = $localeCharset_b = $localeCharset_c = $localeCharset_d = '';

	// Ensure that the locale configuration exists
	if (!isset($fp_config ['locale'] ['lang']) || !isset($fp_config ['locale'] ['charset'])) {
		trigger_error('Locale configuration missing in fp_config.', E_USER_WARNING);
		return;
	}

	$langId = $fp_config ['locale'] ['lang'];
	$charset = $fp_config ['locale'] ['charset'];

	// Check whether LANG_DIR is defined
	if (!defined('LANG_DIR')) {
		trigger_error('LANG_DIR is not defined.', E_USER_WARNING);
		return;
	}

	// Creating the path to the language configuration file and securing it
	$langConfFile = realpath(LANG_DIR . $langId . '/lang.conf.php');
	if ($langConfFile && file_exists($langConfFile)) {
		include_once $langConfFile;
	} else {
		trigger_error('Language configuration file not found: ' . ($langConfFile ? : 'undefined'), E_USER_WARNING);
		return;
	}

	// Validate the configuration and apply fallback if necessary
	$fallbackLangconf = [
		'localecountry_a' => 'en_US',
		'localecountry_b' => 'en-US',
		'localeshort' => 'en',
		'charsets' => ['utf-8'],
		'localecharset_a' => '.UTF-8',
		'localecharset_b' => '.utf8',
		'localecharset_c' => '.ISO-8859-15',
		'localecharset_d' => '.iso885915',
	];

	foreach (['localecountry_a', 'localecountry_b', 'charsets', 'localeshort'] as $key) {
		if (!isset($langconf [$key]) || !is_array($langconf [$key]) && $key === 'charsets') {
			trigger_error('Missing or invalid key in language configuration: ' . $key . '. Using fallback value.', E_USER_WARNING);
			$langconf [$key] = $fallbackLangconf[$key];
		}
	}

	// Checking the charset entries
	if (!empty($langconf ['charsets']) && is_array($langconf ['charsets'])) {
		if (isset($langconf ['charsets'] [0]) && preg_match('/\b' . preg_quote($langconf ['charsets'][0], '/') . '\b/i', $charset)) {
			$localeCharset_a = $langconf ['localecharset_a'] ?? $fallbackLangconf ['localecharset_a']; // .UTF-8
			$localeCharset_b = $langconf ['localecharset_b'] ?? $fallbackLangconf ['localecharset_b']; // .utf8
		}

		if (isset($langconf['charsets'] [1]) && preg_match('/\b' . preg_quote($langconf['charsets'] [1], '/') . '\b/i', $charset)) {
			$localeCharset_c = $langconf ['localecharset_c'] ?? $fallbackLangconf ['localecharset_c']; // .ISO-8859-15
			$localeCharset_d = $langconf ['localecharset_d'] ?? $fallbackLangconf['localecharset_d']; // .iso885915
		}
	}

	$localeCountry_a = $langconf ['localecountry_a'] ?? $fallbackLangconf ['localecountry_a']; // de_DE
	$localeCountry_b = $langconf ['localecountry_b'] ?? $fallbackLangconf ['localecountry_b']; // de-DE
	$localeShort = $langconf ['localeshort'] ?? $fallbackLangconf ['localeshort']; // de

	// Check whether LC_TIME is already set
	$currentLocale = setlocale(LC_TIME, 0);
	if ($currentLocale === false || !preg_match('/\b' . preg_quote($localeShort, '/') . '\b/i', $currentLocale)) {
		// If not, then try setting the various possible locale names
		$currentLocale = setlocale(
			LC_TIME, //
			$localeCountry_a . $localeCharset_a, // de_DE.UTF8
			$localeCountry_a . $localeCharset_b, // de_DE.utf8
			$localeCountry_a . $localeCharset_c, // de_DE.ISO-8859-15
			$localeCountry_a . $localeCharset_d, // de_DE.iso885915
			$localeCountry_a, // de_DE
			$localeCountry_b, // de-DE
			$localeShort // de
		);

		// Debugging message if locale change fails
		if ($currentLocale === false) {
			trigger_error('Failed to set locale to: ' . implode(', ', [$localeCountry_a, $localeCountry_b, $localeShort]), E_USER_WARNING);
		}
	}

	// Optional: Debugging output (deactivate in production)
	// echo '<pre>' . strftime_replacement("%B") . '</pre>';
}

/**
 * Function: fix_encoding_issues
 *
 * Description:
 * This function resolves encoding issues by ensuring that input text is correctly interpreted as UTF-8,
 * decoding HTML entities, handling typical mixed encodings (e.g., "Ã¤" to "ä"), and supporting conversion
 * back to specific target encodings (e.g., `ISO-8859-1`, `ISO-8859-15`, `ISO-8859-7`, `ISO-8859-5`).
 * It is designed for multilingual environments, ensuring compatibility with legacy systems and diverse input sources.
 *
 * Usage:
 * - **In PHP**: Use this function to sanitize and standardize text inputs before further processing or output.
 * - **In Smarty Templates**: Apply this function to variables in templates by registering it as a Smarty modifier
 *   or using it in preprocessed data sent to the templates. When necessary, specify the target encoding.
 *
 * Inputs:
 * - `$text` (string): The input string that might contain HTML entities, mixed encodings, or non-UTF-8 characters.
 * - `$target_encoding` (string): The desired output encoding. Defaults to `UTF-8`. Supported values include:
 *   `utf-8`, `iso-8859-1`, `iso-8859-15`, `iso-8859-7`, `iso-8859-5`.
 *
 * Outputs:
 * - (string): A string encoded in the specified target encoding, with HTML entities decoded and encoding issues resolved.
 *
 * Process:
 * 1. **HTML Entity Decoding**:
 *    - Decodes HTML entities like `&#8220;` into their respective characters (e.g., `“`).
 *    - Uses `html_entity_decode` with the `UTF-8` character set.
 * 2. **Encoding Verification and Conversion**:
 *    - Checks if the input text is valid UTF-8 using `mb_check_encoding`.
 *    - Attempts to convert the text from known source encodings (`ISO-8859-1`, `ISO-8859-15`, etc.)
 *      to UTF-8 using `mb_convert_encoding`.
 *    - If none of the predefined encodings work, forces UTF-8 using `mb_convert_encoding`.
 * 3. **Mixed Encoding Correction**:
 *    - Handles common mixed encoding issues, such as "Ã¤" (UTF-8 interpreted as ISO-8859-1) to "ä".
 *    - Uses a mapping table for multilingual support, covering German, Spanish, French, Italian, Czech,
 *      Danish, Greek, Russian, Portuguese, Dutch, and English special characters.
 * 4. **Final UTF-8 Enforcement**:
 *    - Ensures the text is consistently UTF-8 by re-encoding it with `mb_convert_encoding`.
 * 5. **Optional Target Encoding Conversion**:
 *    - If `$target_encoding` is not `UTF-8`, converts the UTF-8 text to the specified encoding
 *      using `mb_convert_encoding`. This supports FlatPress configurations or other system requirements.
 *
 * Limitations:
 * - Assumes text can be interpreted as UTF-8 or one of the predefined source encodings.
 * - FlatPress `$fp_config['locale']['charset']` should be lowercase to avoid misinterpretation of encodings.
 * - Complex encoding scenarios beyond predefined mappings may require additional adjustments.
 *
 * Example:
 * ```php
 * $text = "Hallo, das ist ein Ã¤lteres Dokument.";
 * $fixed_text = fix_encoding_issues($text, 'ISO-8859-1');
 * echo $fixed_text; // Output: "Hallo, das ist ein älteres Dokument."
 * ```
 *
 * Note:
 * - Ensure that text passed to Smarty templates matches the expected encoding to prevent double encoding issues.
 * - Supports FlatPress configurations and international applications with diverse character sets.
 */
function fix_encoding_issues($text, $target_encoding = 'UTF-8') {
	global $fp_config;

	// Fetch the charset from FlatPress config if not provided
	if (isset($fp_config ['locale'] ['charset'])) {
		$target_encoding = strtolower($fp_config ['locale'] ['charset']);
	}

	// Decode HTML entities (e.g. &#8220; to “)
	$text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');

	// Check whether the text is in UTF-8
	if (!mb_check_encoding($text, 'UTF-8')) {
		// List of source encodings that can be decoded
		$possible_encodings = ['ISO-8859-1', 'ISO-8859-15', 'ISO-8859-7', 'ISO-8859-5'];

		foreach ($possible_encodings as $encoding) {
			$converted = @mb_convert_encoding($text, 'UTF-8', $encoding);
			if ($converted !== false && mb_check_encoding($converted, 'UTF-8')) {
				$text = $converted;
				break;
			}
		}

		// Fallback if no encoding fits
		if (!mb_check_encoding($text, 'UTF-8')) {
			// Force UTF-8 using mb_convert_encoding (replaces utf8_encode)
			$text = mb_convert_encoding($text, 'UTF-8', 'auto');
		}
	}

	// Treat typical mixed encodings (e.g. Ã¤ -> ä)
	$mappings = [
		// German
		'Ã¤' => 'ä', 'Ã¶' => 'ö', 'Ã¼' => 'ü', 'ÃŸ' => 'ß',
		'Ã„' => 'Ä', 'Ã–' => 'Ö', 'Ãœ' => 'Ü',
		// Spanish
		'Ã¡' => 'á', 'Ã©' => 'é', 'Ã­' => 'í', 'Ã³' => 'ó', 'Ãº' => 'ú', 'Ã±' => 'ñ',
		'Ã�' => 'Á', 'Ã‰' => 'É', 'Ã�' => 'Í', 'Ã“' => 'Ó', 'Ãš' => 'Ú', 'Ã‘' => 'Ñ',
		// French
		'Ã ' => 'à', 'Ã¨' => 'è', 'Ã©' => 'é', 'Ãª' => 'ê', 'Ã«' => 'ë', 'Ã§' => 'ç',
		// Italian
		'Ã¬' => 'ì', 'Ã²' => 'ò', 'Ã¹' => 'ù',
		// Czech
		'Å¡' => 'š', 'Å™' => 'ř', 'Å¾' => 'ž', 'Ä›' => 'ě',
		// Danish
		'Ã¦' => 'æ', 'Ã¸' => 'ø', 'Ã…' => 'Å',
		// Greek
		'Î±' => 'α', 'Î²' => 'β', 'Î³' => 'γ', 'Î´' => 'δ',
		// Russian
		'Ð°' => 'а', 'Ð±' => 'б', 'Ð²' => 'в', 'Ð³' => 'г',
		// Portuguese
		'Ã£' => 'ã', 'Ãµ' => 'õ', 'Ãª' => 'ê', 'Ã§' => 'ç',
		// Dutch
		'Ã¨' => 'è', 'Ã´' => 'ô',
		// English (typical quotation marks and dashes)
		'â€œ' => '“', 'â€' => '”', 'â€˜' => '‘', 'â€™' => '’', 'â€”' => '—'
	];

	// Applying the mapping table
	$text = strtr($text, $mappings);

	// Ensure the text is in UTF-8 for consistent processing
	$text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');

	// Decode HTML entities again after final conversion
	$text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');

	// Convert text to the target encoding if it's not UTF-8
	if ($target_encoding !== 'utf-8') {
		// Convert UTF-8 back to the specified target encoding
		$text = mb_convert_encoding($text, strtoupper($target_encoding), 'UTF-8');
	}

	return $text;
}
?>
