<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
Hi, this is test!<br>
@if (Auth::check())
    {{ \Auth::user()->name }}<br />
    <a href="/auth/logout">ログアウト</a>
@else
    ログインしてません<br />
    <a href="/auth/login">ログイン</a><br />
    <a href="/auth/register">会員登録</a>
@endif
</body>
</html>