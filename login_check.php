<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_ogm.css">
    <title>ログイン確認画面</title>
</head>
<header><?= require "header.php" ?></header>
<?php
	//customerセッション変数を破棄
	unset($_SESSION['user']);
	//MySQLデータベースに接続する
	require 'db_connect.php';
	//SQL文を作る（プレースホルダを使った式）
	$sql = "select * from user where name = :name and password = :password";
	//プリペアードステートメントを作る
	$stm = $pdo->prepare($sql);
	//プリペアードステートメントに値をバインドする
	$stm->bindValue(':name',$_POST['name'],PDO::PARAM_STR);
	$stm->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
	//SQL文を実行する
	$stm->execute();
	//結果の取得（連想配列で受け取る）
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	//customerセッションの設定
	foreach ($result as $row) {
		$_SESSION['user'] = [
			'id' => $row['id'], 'name' => $row['name'],
            'password' => $row['password'],
			'street_address' => $row['street_address'],
            'mail' => $row['mail'], 'age' => $row['age']
		];
	}
?>
<body>
<?php
if (isset($_SESSION['user'])) {
		echo 'いらっしゃいませ、', $_SESSION['user']['name'], 'さん。';
?>
<p><a href="top.php"><input type="submit" value="TOPページ"></a></p>
<?php
	} else {
		echo 'ログイン名またはパスワードが違います。';
?>
    <p><a href="login.php"><input type="submit" value="戻る"></a></p>
<?php
	}
?>
</body>
</html>
