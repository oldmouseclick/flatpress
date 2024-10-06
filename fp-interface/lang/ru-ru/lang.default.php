<?php
$lang = array();

$lang ['main'] = array(
	'nextpage' => 'Следующая страница &raquo;',
	'prevpage' => '&laquo; Предыдущая страница',
	'entry' => 'Запись',
	'static' => 'Статическая страница',
	'comment' => 'Комментарий',
	'preview' => 'Редактирование/Предварительный просмотр',

	'filed_under' => 'В разделе ',

	'add_entry' => 'Добавить запись',
	'add_comment' => 'Добавить комментарий',
	'add_static' => 'Добавить статическую страницу',

	'btn_edit' => 'Редактировать',
	'btn_delete' => 'Удалить',

	'nocomments' => 'Добавить комментарий',
	'comment' => '1 комментарий',
	'comments' => 'комментарии',

	'rss' => 'Подписаться на RSS-канал',
	'atom' => 'Подписаться на Atom-канал'
);

$lang ['search'] = array(
	'head' => 'Поиск',
	'fset1' => 'Вставьте критерии поиска',
	'keywords' => 'Фраза',
	'onlytitles' => 'Только в заголовках',
	'fulltext' => 'В тексте',

	'fset2' => 'Дата',
	'datedescr' => 'Поиск можно привязать к определенной дате. Можно выбрать год, год и месяц или полную дату. ' . //
		'Оставьте пустым для поиска по всей базе данных.',

	'fset3' => 'Искать в категориях',
	'catdescr' => 'Не выбирайте ни одной, чтобы выполнить поиск по всем',

	'fset4' => 'Начать поиск',
	'submit' => 'Искать',

	'headres' => 'Результаты поиска',
	'descrres' => 'Поиск <strong>%s</strong> дал следующие результаты:',
	'descrnores' => 'Поиск <strong>%s</strong> не дал результатов.',

	'moreopts' => 'Больше опций',

	'searchag' => 'Искать снова'
);

$lang ['search'] ['error'] = array(
	'keywords' => 'Вы должны указать хотя бы одно ключевое слово'
);

$lang ['staticauthor'] = array(
	// "Published by" in static pages
	'published_by' => 'Опубликовано пользователем',
	'on' => ''
);

$lang ['entryauthor'] = array(
	// "Posted by" in entry pages
	'posted_by' => 'Размещено пользователем',
	'at' => 'в'
);

$lang ['entry'] = array();
$lang ['entry'] ['flags'] = array();

$lang ['entry'] ['flags'] ['long'] = array(
	'draft' => '<strong>Черновик записи</strong>: скрытый, ожидающий публикации',
	// 'static' => '<strong>Статическая запись</strong>: обычно скрыт, для доступа к записи вставьте ?page=title-of-the-entry in URL-адрес (экспериментально)',
	'commslock' => '<strong>Комментарии заблокированы</strong>: комментарии запрещены для данной записи'
);

$lang ['entry'] ['flags'] ['short'] = array(
	'draft' => 'Черновик',
	// 'static' => 'Статическая запись',
	'commslock' => 'Комментарии заблокированы'
);

$lang ['entry'] ['categories'] = array(
	'unfiled' => 'Отсутствуют'
);

$lang ['404error'] = array(
	'subject' => 'Не найдено',
	'content' => '<p>Извините, мы не смогли найти запрошенную вами страницу</p>'
);

// Login
$lang ['login'] = array(
	'head' => 'Вход',
	'fieldset1' => 'Введите имя пользователя и пароль',
	'user' => 'Имя пользователя:',
	'pass' => 'Пароль:',
	'fieldset2' => 'Войти',
	'submit' => 'Войти',
	'forgot' => 'Пароль утерян'
);

$lang ['login'] ['success'] = array(
	'success' => 'Вы вошли в систему.',
	'logout' => 'Вы вышли из системы.',
	'redirect' => 'Вы будете перенаправлены через 5 секунд.',
	'opt1' => 'Вернуться к указателю',
	'opt2' => 'Перейти в зону администрирования',
	'opt3' => 'Добавить новую запись'
);

$lang ['login'] ['error'] = array(
	'user' => 'Необходимо ввести имя пользователя.',
	'pass' => 'Необходимо ввести пароль.',
	'match' => 'Пароль неверный.',
	'timeout' => 'Пожалуйста, подождите 30 секунд, прежде чем повторить попытку.'
);

$lang ['comments'] = array(
	'head' => 'Добавить комментарий',
	'descr' => 'Заполните форму ниже, чтобы добавить свои комментарии',
	'fieldset1' => 'Данные пользователя',
	'name' => 'Имя (*)',
	'email' => 'Электронная почта:',
	'www' => 'Веб-сайт:',
	'cookie' => 'Запомнить меня',
	'fieldset2' => 'Добавьте ваш комментарий',
	'comment' => 'Комментарий (*):',
	'fieldset3' => 'Отправить',
	'submit' => 'Отправить',
	'reset' => 'Очистить поля',
	'success' => 'Ваш комментарий был успешно добавлен',
	'nocomments' => 'Эта запись еще не была прокомментирована',
	'commslock' => 'Комментарии к записи отключены'
);

$lang ['comments'] ['error'] = array(
	'name' => 'Необходимо ввести имя',
	'email' => 'Вы должны ввести действительный адрес электронной почты',
	'www' => 'Необходимо ввести действительный URL-адрес',
	'comment' => 'Вы должны ввести комментарий'
);

$lang ['postviews'] = array(
	// PostView-Plugin
	'views' => 'просмотры',
);

$lang ['date'] ['month'] = array(
	'Январь',
	'Февраль',
	'Март',
	'Апрель',
	'Май',
	'Июнь',
	'Июль',
	'Август',
	'Сентябрь',
	'Октябрь',
	'Ноябрь',
	'Декабрь'
);

$lang ['date'] ['month_abbr'] = array(
	'Янв',
	'Фев',
	'Мар',
	'Апр',
	'Май',
	'Июн',
	'Июл',
	'Авг',
	'Сент',
	'Окт',
	'Нояб',
	'Дек'
);

$lang ['date'] ['weekday'] = array(
	'Воскресенье',
	'Понедельник',
	'Вторник',
	'Среда',
	'Четверг',
	'Пятница',
	'Суббота'
);

$lang ['date'] ['weekday_abbr'] = array(
	'Вс',
	'Пн',
	'Вт',
	'Ср',
	'Чт',
	'Пт',
	'Сб'
);
?>
