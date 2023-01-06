<?php

//se connecter à la base de donnée
$adresseServeurMysql = "localhost";
$nomDeDataBase = "blog";
$username = "blogger";
$password = "123456";
$pdo = new PDO("mysql:host=$adresseServeurMysql;dbname=$nomDeDataBase", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);


$id = $_POST['id'];
$title = $_POST['editName'];
$content = $_POST['editText'];

$request = $pdo->query("UPDATE `posts` SET `title` = '$title', `content` = '$content' WHERE `posts`.`id` = $id;");

header( 'Location: index.php' );


