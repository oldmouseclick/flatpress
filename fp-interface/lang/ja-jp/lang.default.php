<?php
$lang = array();

$lang ['main'] = array(
	'nextpage' => '次のページ &raquo;',
	'prevpage' => '&laquo; 前のページ',
	'entry' => 'ブログ記事',
	'entries' => 'ブログ記事',
	'static' => '固定ページ',
	'preview' => '編集/プレビュー',

	'filed_under' => 'Filed under ',

	'add_entry' => 'ブログ記事の新規作成',
	'add_comment' => 'コメントの追加',
	'add_static' => '固定ページの新規作成',

	'btn_edit' => '編集',
	'btn_delete' => '削除',

	'nocomments' => 'コメントの記入',
	'comment' => '1コメントあり',
	'comments' => 'コメントあり',

	'rss' => 'RSSフィードを購読する',
	'atom' => 'Atomフィードを購読する'
);

$lang ['search'] = array(
	'head' => '検索',
	'fset1' => '検索キーワードの指定',
	'keywords' => 'キーワード',
	'onlytitles' => 'タイトルのみを検索',
	'fulltext' => '全文から検索',

	'fset2' => '日付の指定',
	'datedescr' => '日付で絞り込み指定できます。年、年月、年月日を指定できます。 ' . //
		'日付の指定をしない場合は、空欄にしてください。',

	'fset3' => 'カテゴリで検索',
	'catdescr' => '全カテゴリから検索する場合は、いずれも選ばないでください。',

	'fset4' => '検索を開始',
	'submit' => '検索する',

	'headres' => '検索結果',
	'descrres' => '<strong>%s</strong> の検索結果:',
	'descrnores' => '<strong>%s</strong> で検索しましたが、見つかりませんでした。',

	'moreopts' => '追加オプション',

	'searchag' => '再検索'
);

$lang ['search'] ['error'] = array(

	'keywords' => '検索キーワードを記入してください'
);

$lang ['staticauthor'] = array(
	// "Published by" in static pages
	'published_by' => '発行元',
	'on' => 'on'
);

$lang ['entryauthor'] = array(
	// "Posted by" in entry pages
	'posted_by' => '投稿者',
	'at' => 'at'
);

$lang ['entry'] = array();
$lang ['entry'] ['flags'] = array();

$lang ['entry'] ['flags'] ['long'] = array(
	'draft' => '<strong>下書き記事</strong>: 公開されません',
	//'static' => '<strong>Static entry</strong>: normally hidden, to reach the entry put ?page=title-of-the-entry in url (experimental)',
	'commslock' => '<strong>コメント保護</strong>: コメントを記入できません'
);

$lang ['entry'] ['flags'] ['short'] = array(
	'draft' => '下書き',
	//'static' => 'Static',
	'commslock' => 'コメント保護'
);

$lang ['entry'] ['categories'] = array(
	'unfiled' => 'カテゴリが指定されていません'
);

$lang ['404error'] = array(
	'subject' => 'ページが見つかりません',
	'content' => '<p>要求されたページを見つけることができませんでした。</p>'
);

// Login
$lang ['login'] = array(
	'head' => 'ログイン',
	'fieldset1' => 'ユーザ名とパスワードを入力してください',
	'user' => 'ユーザ名:',
	'pass' => 'パスワード:',
	'fieldset2' => 'ログイン実行',
	'submit' => 'ログインする',
	'forgot' => 'パスワードを忘れた'
);

$lang ['login'] ['success'] = array(
	'success' => 'ログインしました。',
	'logout' => 'ログアウトしました。',
	'redirect' => '5秒後にリダイレクトされます。',
	'opt1' => 'サイトのトップページに戻る',
	'opt2' => '管理者用ページへ移動する',
	'opt3' => 'ブログ記事を新規作成する'
);

$lang ['login'] ['error'] = array(
	'user' => 'ユーザ名を記入してください。',
	'pass' => 'パスワードを記入してください。',
	'match' => 'パスワードが正しくありません。',
	'timeout' => '再試行する前に30秒間お待ちください。'
);

$lang ['comments'] = array(
	'head' => 'コメント記入',
	'descr' => '次のフォームにコメントを記入してください。',
	'fieldset1' => 'プロフィールのご記入',
	'name' => 'お名前 (*)',
	'email' => 'メールアドレス:',
	'www' => 'URL:',
	'cookie' => 'ブラウザに記憶させる',
	'fieldset2' => 'コメントのご記入',
	'comment' => 'コメント (*):',
	'fieldset3' => '送信',
	'submit' => '送信する',
	'reset' => 'リセット',
	'success' => 'コメントが投稿されました。',
	'nocomments' => 'まだコメントがついていません。',
	'commslock' => 'コメントを記入することはできません。'
);

$lang ['comments'] ['error'] = array(
	'name' => 'お名前を記入してください。',
	'email' => 'メールアドレスが正しいか確認してください。',
	'www' => 'URLが正しいか確認してください。',
	'comment' => 'コメントを記入してください。'
);

$lang ['postviews'] = array(
	// PostView-Plugin
	'views' => 'views'
);

$lang ['date'] ['month'] = array(
	'1月',
	'2月',
	'3月',
	'4月',
	'5月',
	'6月',
	'7月',
	'8月',
	'9月',
	'10月',
	'11月',
	'12月'
);

$lang ['date'] ['month_abbr'] = array(
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'8',
	'9',
	'10',
	'11',
	'12'
);

$lang ['date'] ['weekday'] = array(
	'日曜日',
	'月曜日',
	'火曜日',
	'水曜日',
	'木曜日',
	'金曜日',
	'土曜日'
);

$lang ['date'] ['weekday_abbr'] = array(
	'日',
	'月',
	'火',
	'水',
	'木',
	'金',
	'土'
);
?>
