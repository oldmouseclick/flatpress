<?php
$lang ['admin'] ['config'] ['default'] = array(
	'head' => 'Настройки',
	'descr' => 'Настройка и конфигурирование установки FlatPress.',
	'submit' => 'Сохранить изменения',

	'sysfset' => 'Общие сведения о системе',
	'syswarning' => '<big>Внимание!</big> Эти данные являются критическими и должны быть правильными, иначе FlatPress (вероятно) не будет работать должным образом.',
	'blog_root' => '<strong>Абсолютный путь к flatpress</strong>. Примечание: ' .
		'как правило, вам не придется редактировать это, но в любом случае будьте внимательны, потому что мы не можем проверить, правильно это или нет.',
	'www' =>'<strong>Корневой домен блога.</strong>. URL-адрес вашего блога, включая подкаталоги.<br>' .
		'Например: http://www.mydomain.com/flatpress/ (необходим слэш в конце строки)',

	// ------
	'gensetts' => 'Основные настройки',
	'blogtitle' => 'Название блога',
	'blogsubtitle' => 'Подзаголовок блога',
	'blogfooter' => 'Подвал блога',
	'blogauthor' => 'Автор блога',
	'startpage' => 'Главная страница этого сайта',
	'stdstartpage' => 'мой блог (по умолчанию)',
	'blogurl' => 'URL блога',
	'blogemail' => 'Электронная почта',
	'notifications' => 'Уведомления',
	'mailnotify' => 'Включить уведомление о комментариях по электронной почте',
	'blogmaxentries' => 'Количество постов на странице',
	'langchoice' => 'Язык',

	'intsetts' => 'Международные параметры',
	'utctime' => 'Время по <abbr title="Всемирное координированное время">UTC</abbr>',
	'timeoffset' => 'Время должно отличаться на',
	'hours' => '(в часах)',
	'timeformat' => 'Формат времени по умолчанию',
	'dateformat' => 'Формат даты по умолчанию',
	'dateformatshort' => 'Формат даты по умолчанию (короткий)',
	'output' => 'Вывод',
	'charset' => 'Стандарт кодирования',
	'charsettip' => 'Стандарт кодирования символов, в котором вы пишете свой блог (' .
		'<a class="hint" href="https://wiki.flatpress.org/doc:techfaq#character_encoding" target="_blank" title="Какие стандарты кодирования символов поддерживаются FlatPress?">рекомендуется</a> UTF-8)'
);

$lang ['admin'] ['config'] ['default'] ['msgs'] = array(
	1 => 'Конфигурация успешно сохранена.',
	-1 => 'При попытке сохранить конфигурацию произошла ошибка.'
);

$lang ['admin'] ['config'] ['default'] ['error'] = array(
	'www' => 'Корневой домен блога должен быть действительным URL',
	'title' => 'Вы должны указать название',
	'email' => 'Электронная почта должна иметь правильный формат',
	'maxentries' => 'Вы не указали действительное количество записей',
	'timeoffset' => 'Вы не ввели корректное смещение времени! Вы можете использовать плавающую точку (например, 2ч30м" => 2.5)',
	'timeformat' => 'Вы должны указать формат строки для времени',
	'dateformat' => 'Вы должны указать формат строки для даты',
	'dateformatshort' => 'Вы должны указать формат строки для даты (короткий)',
	'charset' => 'Вы должны указать идентификатор кодировки',
	'lang' => 'Выбранный вами язык недоступен'
);
?>
