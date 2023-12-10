<?php
$lang['plugin']['lastcommentsadmin ']['errors'] = array (
	-1 => 'API-ключ не установлен. Откройте плагин, чтобы установить API-ключ. Зарегистрируйтесь на <a href="https://akismet.com/" target="_blank">akismet.com</a> чтобы получить его'
);

$lang['admin']['plugin']['submenu']['lastcommentsadmin'] = 'Администрирование последних комментариев';

$lang['admin']['plugin']['lastcommentsadmin'] = array(
	'head' => 'Администрирование последних комментариев',
	'description' => 'Очистка и восстановление кэша последних комментариев ',
	'clear' => 'Очистка кэша',
	'cleardescription' => 'Удаление кэш-файла последнего комментария. Новый файл кэша будет создан при публикации нового комментария.',
	'rebuild' => 'Восстановление кэша',
	'rebuilddescription' => 'Восстановить кэш-файл последнего комментария. Это может занять очень много времени. Может вообще не сработать. Может загореться Ваша мышь! =)',
);

$lang['admin']['plugin']['lastcommentsadmin']['msgs'] = array(
	1 => 'Кэщ удален',
	2 => 'Кэш восстановлен!',
	-1 => 'Ошибка!',
	-2 => 'Для работы этого плагина требуется плагин LastComments!'
);
?>