<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_ogm.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<header>
<?php require "header.php" ?>
</header>
<body>
    <strong>就職サポートログインページ</strong>
    <form method="post" action="login_check.php">
    <p>名前：
    <input type="text" id="name"></p>
    <p>パスワード：
    <input type="password" id="pass"></p>
    <p><a href="login_check_true.html"><input type="submit" value="login"></a></p>
    </form>
</body>
<footer>
<?php require "footer.php"?>
</footer>
</html>
