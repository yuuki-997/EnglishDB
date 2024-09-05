<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなの英単語帳</title>
</head>
<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">単語帳</a></div>
    </div>
  </nav>
</header>

<form method="post" action="insert.php">
    <div class="jumbotron">
        <fieldset>
            <legend>英単語を記録</legend>
            <label>Name：<input  type="text" name="name"></label><br>
            <label>English Word:<input type="text" name="english"></label><br>
            <label>Japanese Word:<input type="text" name="japanese"></label><br>
            <label>Tag:
            <select name="tag">
            <option>TOEIC</option>
            <option>BOOK</option>
            <option>MOVIE</option>
            <option>CONVERSATION</option>
            <option>OTHER</option>
            </select></label><br>
            <label>Comment:<textArea name="comment" rows="4" cols="40"></textArea></label><br>
            <input type="submit" value="送信">
        </fieldset>
    </div>

</form>

</body>
</html>