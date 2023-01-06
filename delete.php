<?php

//se connecter à la base de donnée
$adresseServeurMysql = "localhost";
$nomDeDataBase = "blog";
$username = "blogger";
$password = "123456";
$pdo = new PDO("mysql:host=$adresseServeurMysql;dbname=$nomDeDataBase", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$request = $pdo->query('SELECT * FROM posts');

$posts = $request->fetchAll();


$input = "rien";

if( !empty($_GET['carotte']) ){
    $input = $_GET['carotte'];
}

$id = $_GET['id'];


$request = $pdo->query("DELETE FROM `posts` WHERE `posts`.`id` = $id");

header( 'Location: index.php' );


