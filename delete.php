<?php

//se connecter à la base de donnée

require_once('pdo.php');

$request = $pdo->query('SELECT * FROM posts');

$posts = $request->fetchAll();


$input = "rien";

if( !empty($_GET['carotte']) ){
    $input = $_GET['carotte'];
}

$id = $_GET['id'];


$request = $pdo->prepare("DELETE FROM `posts` WHERE id=:id");

$request->execute(['id'=>$id]);

header( 'Location: index.php' );


