<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Japanese text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'ココにコメントを入力…',
	'reply-form'		=> 'ココに返信を入力…',
	'comment-formatting'	=> '書式設定',
	'accepted-format'	=> '%s容認',
	'accepted-html'		=> '&lt;b&gt;、&lt;strong&gt;、&lt;u&gt;、&lt;i&gt;、&lt;em&gt;、&lt;s&gt;、&lt;big&gt;、&lt;small&gt;、&lt;sup&gt;、&lt;sub&gt;、&lt;pre&gt;、&lt;ul&gt;、&lt;ol&gt;、&lt;li&gt;、&lt;blockquote&gt;、&lt;code&gt;はHTMLをエスケープ、URLは自動的にリンクになり、とここで[img]URLここ[/img]外部画像を表示します。',
	'accepted-markdown'	=> '**太字**、_下線_、*イタリック*、~~取り消し線~~、`ハイライト`、```コード``` HTMLをエスケープします。HTMLとMarkdownはあなたのコメントに一緒に使用することができます。',
	'post-button'		=> '送信する',
	'login'			=> 'ログイン',
	'login-tip'		=> 'ログイン (任意)',
	'logout'		=> 'ログアウト',
	'be-first-name'		=> 'まだコメントがありません。',
	'pending-name'		=> '保留中…',
	'deleted-name'		=> 'は削除…',
	'error-name'		=> 'エラー…',
	'be-first-note'		=> 'ぜひ最初のコメントを！',
	'pending-note'		=> 'このコメントは承認が保留されています。',
	'deleted-note'		=> 'このコメントは削除されました。',
	'error-note'		=> '何かが間違っていました。このコメントを取得できませんでした。',
	'options'		=> 'のオプション',
	'cancel'		=> 'キャンセル',
	'reply-to-comment'	=> 'コメントへ返信',
	'edit-your-comment'	=> 'あなたのコメントを編集',
	'optional'		=> '任意',
	'required'		=> '必須',
	'name'			=> 'お名前',
	'name-tip'		=> 'お名前 (%s)',
	'password'		=> 'パスワード',
	'password-tip'		=> 'パスワード (%s、編集またはこのコメントを削除することができます。)',
	'confirm-password'	=> '確認パスワード',
	'email'			=> 'メールアドレス',
	'email-tip'		=> 'メールアドレス (%s、返信をお知らせする為のメールアドレスです。)',
	'website'		=> 'WEBサイト',
	'website-tip'		=> 'WEBサイト・URL (%s)',
	'logged-in'		=> 'あなたは、正常にログインされています！',
	'logged-out'		=> '正常にログアウトされました!',
	'comment-needed'	=> '有効なコメントが入力ていません。もう一度お試しください。',
	'reply-needed'		=> '有効な返信入力していません。もう一度お試しください。',
	'field-needed'		=> '「%s」フィールドは必須です。',
	'post-fail'		=> '失敗しました！十分な権限がありません。',
	'comment-deleted'	=> 'コメントは削除！',
	'post-reply'		=> '返信する',
	'delete'		=> '削除する',
	'permanently-delete'	=> '完全に削除してください',
	'subscribe'		=> '返信をお知らせ',
	'subscribe-tip'		=> 'コメントへの返信をメールでお知らせ',
	'edit-comment'		=> 'コメントを編集する',
	'status'		=> 'ステータス',
	'status-approved'	=> '承認',
	'status-pending'	=> '承認待ち',
	'status-deleted'	=> 'マーク削除',
	'save'			=> '保存する',
	'no-email-warning'	=> 'メールアドレスを入力しないとコメントへの返信のお知らせを受け取ることができません。よろしいですか？',
	'invalid-email'		=> '入力したメールアドレスが無効です。',
	'delete-comment'	=> 'このコメントを削除してもよろしいですか？',
	'post-comment-on'	=> array ('コメントの投稿', 'コメントの投稿上「%s」'),
	'popular-comments'	=> array ('コメントほとんど人気です', '最も人気のコメント'),
	'showing-comments'	=> array ('%d件のコメント', '%d件のコメント'),
	'count-link'		=> array ('%dコメント', '%dのコメント'),
	'count-replies'		=> array ('返信含む%d件', '%d件の返信含む'),
	'sort'			=> 'ソート',
	'sort-ascending'	=> 'コメント順',
	'sort-descending'	=> '新しいもの順',
	'sort-by-date'		=> '最新のコメント',
	'sort-by-likes'		=> 'いいね',
	'sort-by-replies'	=> '回答によって',
	'sort-by-discussion'	=> '議論することによって',
	'sort-by-popularity'	=> '人気順',
	'sort-by-name'		=> '評価順',
	'sort-threads'		=> 'ツリー形式',
	'thread'		=> '%sへの返信',
	'thread-tip'		=> 'スレッドの先頭にジャンプ',
	'comments'		=> 'コメント',
	'replies'		=> '回答',
	'edit'			=> '編集',
	'reply'			=> '返信',
	'like'			=> array ('いいね', 'いいね'),
	'liked'			=> 'いいね',
	'unlike'		=> '取消す',
	'like-comment'		=> '「いいね」する',
	'liked-comment'		=> '「いいね」を取消す',
	'dislike'		=> array ('厭悪', '厭悪言いました'),
	'disliked'		=> '嫌わ',
	'dislike-comment'	=> '「厭悪」このコメントを',
	'disliked-comment'	=> 'あなたが「厭悪」このコメントを',
	'commenter-tip'		=> '電子メールを介して通知されません',
	'subscribed-tip'	=> '電子メールを介して通知され',
	'unsubscribed-tip'	=> '匿名の場合はメール通知されません',
	'show-other-comments'	=> array ('その他%d件のコメントを表示', '全%d件のコメントを表示'),
	'show-number-comments'	=> array ('%d件のコメントを表示', '他%dコメントを表示'),
	'date-time'		=> '%sで%s',
	'date-years'		=> array ('%d年前', '%d年前'),
	'date-months'		=> array ('%d月前', '%dヶ月前'),
	'date-days'		=> array ('%d日前', '%d日前'),
	'date-today'		=> '%s今日',
	'date-day-names'	=> array ('日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'),
	'date-month-names'	=> array ('1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'),
	'untitled'		=> 'タイトルなし',
	'external-image-tip'	=> '遠隔画像表示しにはクリック',
	'loading'		=> 'ローディング…',
	'click-to-close'	=> '閉じるにはクリック',
	'hashover-comments'	=> 'HashOverコメント',
	'rss-feed'		=> 'RSSフィード',
	'source-code'		=> 'ソースコード',

	'source-code-sub'	=> 'HashOverサーバーサイドのソースコードビューア',
	'type'			=> 'タイプ',
	'path'			=> 'パス',
	'view-as'		=> '別名で表示',
	'text'			=> 'テキスト',
	'download'		=> 'ダウンロード',

	'documentation'		=> 'ドキュメンテーション',
	'coming-soon'		=> 'すぐに来る',
	'example'		=> '例',
	'back'			=> '戻る',
	'value'			=> '値',

	'successful-save'	=> '成功しました！',
	'failed-to-save'	=> '保存に失敗しました！権限を確認してください。',
	'permissions-info'	=> '「%s」のパーミッション0755と所有権を「%s」ユーザに与えます。',

	'admin'			=> '管理者',
	'moderation'		=> '節度',
	'block-ip-addresses'	=> 'IPアドレスをブロックする',
	'filter-url-queries'	=> 'URLクエリをフィルタリング',
	'check-for-updates'	=> 'アップデートを確認',
	'settings'		=> '設定',

	'admin-required'	=> 'あなたは管理者としてログインする必要があります',

	'blocklist-title'	=> 'IPアドレスブロックリスト',
	'blocklist-sub'		=> '特定のIPアドレスをブロックする',
	'blocklist-ip-tip'	=> '削除するIPアドレスまたは空白',

	'url-queries-title'	=> '無視されたURLクエリ',
	'url-queries-sub'	=> 'どのURLクエリを無視すべきかをフィルタする',
	'url-queries-name-tip'	=> '削除するクエリ名または空白',
	'url-queries-value-tip'	=> '任意の値に対するクエリ値または空白',

	'settings-sub'		=> 'さまざまな設定を変更する',
	'moderation-sub'	=> 'コメントの投稿、編集、承認、削除',

	'setting-language'			=> '言語',
	'setting-theme'				=> 'テーマ',
	'setting-uses-moderation'		=> '普通のユーザーが投稿したコメントは管理が必要です',
	'setting-pends-user-edits'		=> '通常のユーザーが編集したコメントには追加の管理が必要です',
	'setting-data-format'			=> 'コメントデータフォーマット',
	'setting-default-name'			=> 'デフォルトのコメント作成者の名前',
	'setting-allows-images'			=> 'コメントの画像表示を許可する',
	'setting-allows-login'			=> 'ユーザーのログインを許可する',
	'setting-allows-likes'			=> 'ユーザーがコメントを気に入るようにする',
	'setting-allows-dislikes'		=> 'ユーザーがコメントを嫌うことを許可する',
	'setting-uses-ajax'			=> '非同期JavaScript機能を有効にする',
	'setting-collapses-interface'		=> 'HashOverのユーザーインターフェース全体を折りたたむ',
	'setting-collapses-comments'		=> '設定可能な数のコメントを折りたたむ',
	'setting-collapse-limit'		=> '崩壊するコメントの数',
	'setting-reply-mode'			=> 'コメントスレッドの表示モード',
	'setting-stream-depth'			=> 'ストリームがフラット化される前の応答インデントの数',
	'setting-popularity-threshold'		=> 'コメントが人気がある必要がある好きなネットの数',
	'setting-popularity-limit'		=> '表示する一般的なコメントの数',
	'setting-uses-markdown'			=> 'Markdownサポートを有効にする',
	'setting-server-timezone'		=> 'サーバーのタイムゾーン',
	'setting-uses-user-timezone'		=> 'ユーザーのタイムゾーンでの日付/時刻の表示（JavaScriptモード）',
	'setting-uses-short-dates'		=> '短い日付/時刻を有効にする（例：1日前に）',
	'setting-time-format'			=> '時刻形式、24時間形式の場合は「H:i」',
	'setting-date-format'			=> '日付形式',
	'setting-displays-title'		=> 'ページタイトルの表示を有効にする',
	'setting-form-position'			=> '一次コメントフォームの位置',
	'setting-uses-auto-login'		=> 'ユーザーがコメントを投稿すると自動的にログインする',
	'setting-shows-reply-count'		=> '総数とは別に回答数を表示する',
	'setting-count-includes-deleted'	=> 'コメント数に削除されたコメントを含める',
	'setting-icon-mode'			=> 'アバターアイコン表示モード',
	'setting-icon-size'			=> 'アバターアイコンサイズ',
	'setting-image-format'			=> 'アイコンやその他の画像のフォーマット',
	'setting-uses-labels'			=> 'ラベルを入力の上に表示する',
	'setting-uses-cancel-buttons'		=> 'フォームにキャンセルボタンがあるかどうか',
	'setting-appends-css'			=> 'ページにHashOver CSSを自動的に追加する',
	'setting-appends-rss'			=> 'ページへのHashOver RSSフィードリンクを追加',
	'setting-login-method'			=> 'ユーザーログインシステム',
	'setting-sets-cookies'			=> 'クッキーを有効にする',
	'setting-secure-cookies'		=> '安全なHTTPSのみのクッキーを使用する',
	'setting-stores-ip-address'		=> 'ユーザーIPアドレスの保存を有効にする',
	'setting-allows-user-replies'		=> 'ユーザーの電子メールを返信通知の「返信先」に設定し',
	'setting-noreply-email'			=> 'メールがないときに使用されるメールアドレス',
	'setting-spam-batabase'			=> 'SPAMデータベースの場所',
	'setting-spam-check-modes'		=> 'SPAMチェックを行うモード',
	'setting-gravatar-force'		=> 'アバターの代わりにテーマグラバター画像を使う',
	'setting-gravatar-default'		=> 'デフォルトのGravatarテーマを使用する',
	'setting-minifies-javascript'		=> 'JavaScriptの有効化を有効にする',
	'setting-minify-level'			=> 'JavaScriptの縮小レベル',
	'setting-allow-local-metadata'		=> 'ページ・メタデータをlocalhostから更新できるようにする'
);
