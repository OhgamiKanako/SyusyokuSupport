<?php session_start(); ?>

<?php
//customerのセッションの破棄
unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ログアウト完了</title>
	<link rel="stylesheet" href="css/style_ogm.css">
    <link rel="stylesheet" href="css/style_home.css">
</head>
<header><?= require 'header.php' ?></header>
<body>
	<?php
		echo 'ログアウトしました。';
	?>
</body>
<footer><?=require 'footer.php'?></footer>
</html>