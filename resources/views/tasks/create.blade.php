<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
<h1>タスク登録画面</h1>
<form name="registform" action="/tasks" method="post">
    {{ csrf_field() }}
    タイトル：<input type="text" name="title" size="30">
    <span>{{ $errors->first('title') }}</span><br />
    備考：<input type="textarea" name="note" rows="4" cols="40">
    <span>{{ $errors->first('note') }}</span><br />

    <button type='submit' name='action' value='send'>保存</button>
</form>
</body>
</html>
