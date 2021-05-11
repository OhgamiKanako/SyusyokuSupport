<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/style_datail.css'>
  <link rel="stylesheet" href="js/top.js">
  <title>会社詳細</title>
</head>
<header>
    <?= require "header.php"?>
</header>
<body>
<?php $i = $_GET['id'];?>
<?php 
require 'db_connect.php';
$sql = "select * from company_menu";
$stm = $pdo->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<footer>
<?= require "footer.php"?>
</footer>
</body>
</html>