<?php
$lang ['admin'] ['config'] ['default'] = array(
	'head' => 'Možnosti',
	'descr' => 'Prilagodite in konfigurirajte svojo namestitev FlatPress.',
	'submit' => 'Shrani Spremembe',

	'sysfset' => 'Splošne Informacije o Sistemu',
	'syswarning' => '<big>Opozorilo!</big> Te informacije so ključnega pomena in morajo biti pravilne, sicer FlatPress morda ne bo deloval pravilno.',
	'blog_root' => '<strong>Absolutna pot do FlatPress</strong>. Opomba: ' . //
		'Navadno tega ne boste morali urejati, vendar bodite previdni, saj ne moremo preveriti, ali je pravilno ali ne.',
	'www' => '<strong>Koren spletnega dnevnika</strong>. URL vašega spletnega dnevnika, vključno z podmapami.<br>' . //
		'Npr.: http://www.mojadomena.com/flatpress/ (končnica poševnice je potrebna)',

	// ------
	'gensetts' => 'Splošne Nastavitve',
	'adminname' => 'Ime upravitelja',
	'adminpassword' => 'Novo geslo',
	'adminpasswordconfirm' => 'Ponovitev gesla',
	'blogtitle' => 'Naslov Bloga',
	'blogsubtitle' => 'Podnaslov Bloga',
	'blogfooter' => 'Noga Bloga',
	'blogauthor' => 'Avtor Bloga',
	'startpage' => 'Začetna stran te spletne strani je',
	'stdstartpage' => 'moj blog (privzeto)',
	'blogurl' => 'URL Bloga',
	'blogemail' => 'E-pošta Bloga',
	'notifications' => 'Obvestila',
	'mailnotify' => 'Omogoči obvestila prek e-pošte za komentarje',
	'blogmaxentries' => 'Število prispevkov na stran',
	'langchoice' => 'Jezik',

	'intsetts' => 'Mednarodne Nastavitve',
	'utctime' => '<abbr title="Univerzalni koordinirani čas">UTC</abbr> čas je',
	'timeoffset' => 'Časovna razlika naj bi bila',
	'hours' => 'ure',
	'timeformat' => 'Privzeti format za čas',
	'dateformat' => 'Privzeti format za datum',
	'dateformatshort' => 'Privzeti format za datum (kratko)',
	'output' => 'Izhod',
	'charset' => 'Nabor znakov',
	'charsettip' => 'Nabor znakov, v katerem pišete svoj blog (UTF-8 je ' . //
		'<a class="hint" href="https://wiki.flatpress.org/doc:techfaq#character_encoding" target="_blank" title="Katere standarde kodiranja znakov podpira FlatPress?">priporočeno</a>)'
);

$lang ['admin'] ['config'] ['default'] ['msgs'] = array(
	1 => 'Nastavitve so bile uspešno shranjene.',
	2 => 'Upravitelj je bil spremenjen. Zdaj boste odjavljeni.',
	-1 => 'Prišlo je do napake med shranjevanjem nastavitev.'
);

$lang ['admin'] ['config'] ['default'] ['error'] = array(
	'www' => 'Koren spletnega dnevnika mora biti veljaven URL',
	'title' => 'Morate navesti naslov',
	'email' => 'E-pošta mora imeti veljaven format',
	'maxentries' => 'Niste vnesli veljavnega števila vnosov',
	'timeoffset' => 'Niste vnesli veljavne časovne razlike! Uporabite lahko plavajoče število (npr. 2h30" => 2.5)',
	'timeformat' => 'Morate vstaviti niz formata za čas',
	'dateformat' => 'Morate vstaviti niz formata za datum',
	'dateformatshort' => 'Morate vstaviti niz formata za datum (kratko)',
	'charset' => 'Morate vstaviti identifikator nabora znakov',
	'lang' => 'Izbrani jezik ni na voljo',
	'admin' => 'Ime skrbnika lahko vsebuje samo črke, številke in 1 podčrtaj.',
	'password' => 'Geslo mora vsebovati vsaj 6 znakov in ne sme vsebovati presledkov.',
	'confirm_password' => 'Gesla se ne ujemajo.'
);
?>
