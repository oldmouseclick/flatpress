<h2>{$plang.title}</h2>
<p>{$plang.intro}</p>

<fieldset class="support-data" id="support-data">
	<h2>
		{$support.h2_general}
	</h2>
	<p class="codeblock">[code]</p>
	<h3>
		{$support.h3_setup}
	</h3>
	<ul>
		<li>
			{$plang.version}
		</li>
		<li>
			{$plang.basedir}
		</li>
		<li>
			{$plang.blogbaseurl}
		</li>
		<li>
			{$support.LANG_DEFAULT}
		</li>
		<li>
			{$support.lang}
		</li>
		<li>
			{$support.charset}
		</li>
		<li>
			{$support.theme}
		</li>
		<li>
			{$support.style}
		</li>
		<li>
			{$support.plugins}{$support.output_plugins}
		</li>
	</ul>
	<p class="codeblock">[/code]</p>

	<h2>
		{$support.h2_permissions}
	</h2>
	<p class="codeblock">[code]</p>
	<h3>
		{$support.h3_core_files}
	</h3>

	<p>
		{$support.desc_setupfile}
	</p>
	<ul>
		<li>
			{$support.setupfile}
		</li>
	</ul>

	<p>
		{$support.desc_defaultsfile}
	</p>
	<ul>
		<li>
			{$support.defaultsfile}
		</li>
	</ul>

	<p>
		{$support.desc_admindir}
	</p>
	<ul>
		<li>
			{$support.admindir}
		</li>
	</ul>

	<p>
		{$support.desc_includesdir}
	</p>
	<ul>
		<li>
			{$support.includesdir}
		</li>
	</ul>

	<h3>
		{$support.h3_configwebserver}
	</h3>
	<p>
		{$support.note_configwebserver}
	</p>
	<p>
		{$support.serversoftware}
	</p>
	<ul>
		<li>
			{$support.maindir}
		</li>
		<li>
			{$support.htaccessw}
		</li>
		<li>
			{$support.htaccessn}
		</li>
	</ul>

	<h3>
		{$support.h3_themesplugins}
	</h3>
	<p>
		{$support.desc_interfacedir}
	</p>
	<ul>
		<li>
			{$support.interfacedir}
		</li>
	</ul>

	<p>
		{$support.desc_themesdir}
	</p>
	<ul>
		<li>
			{$support.themesdir}
		</li>
	</ul>

	<p>
		{$support.desc_plugindir}
	</p>
	<ul>
		<li>
			{$support.plugindir}
		</li>
	</ul>

	<h3>
		{$support.h3_contentdir}
	</h3>
	<p>
		{$support.desc_contentdir}
	</p>
	<ul>
		<li>
			{$support.contentdir}
		</li>
	</ul>

	<p>
		{$support.desc_imagesdir}
	</p>
	<ul>
		<li>
			{$support.imagesdir}
		</li>
	</ul>

	<p>
		{$support.desc_thumbsdir}
	</p>
	<ul>
		<li>
			{$support.thumbsdir}
		</li>
	</ul>

	<p>
		{$support.desc_attachsdir}
	</p>
	<ul>
		<li>
			{$support.attachsdir}
		</li>
	</ul>

	<p>
		{$support.desc_cachedir}
	</p>
	<ul>
		<li>
			{$support.cachedir}
		</li>
	</ul>
	<p class="codeblock">[/code]</p>

	<h2>
		{$support.h2_php}
	</h2>
	<p class="codeblock">[code]</p>
	<p>
		{$support.php_ver}
	</p>
	<h3>
		{$support.h3_extensions}
	</h3>

	<p>
		{$support.desc_php_intl}
	</p>
	<ul>
		<li>
			{$support.php_intl}
		</li>
	</ul>

	<p>
		{$support.desc_php_gdlib}
	</p>
	<ul>
		<li>
			{$support.php_gdlib}
		</li>
	</ul>
	<p class="codeblock">[/code]</p>

	<h2>
		{$support.h2_other}
	</h2>
	<p class="codeblock">[code]</p>
	<p>
		{$support.desc_browser}
	</p>
	<ul>
		<li>
			{$support.detect_browser}{$support.function_browser}</p>
		</li>
	</ul>

	<p>
		{$support.desc_cookie}
	</p>
	<ul>
		<li>
			{$support.session_cookie}{$support.output_sess_cookie}</p>
		</li>
	</ul>
	<p class="codeblock">[/code]</p>

	<h3>
		{$support.h3_completed}
	</h3>
	<p>
		{$support.symbols}
	</p>
	<ul>
		<li>
			{$support.symbol_success}
		</li>
		<li>
			{$support.symbol_attention}
		</li>
		<li>
			{$support.symbol_error}
		</li>
	</ul>
</fieldset>

<div class="buttonbar">
	<input type="submit" value="{$support.close_btn}" onclick="window.location.href='admin.php?p=maintain';">
</div>
