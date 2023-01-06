<?php

//se connecter à la base de donnée

require_once('pdo.php');

$id = $_POST['id'];
$title = $_POST['editName'];
$content = $_POST['editText'];



$request = $pdo->prepare("UPDATE posts SET title = :title, content = :content WHERE id=:id");

$request->execute([
    "title"=>$title,
    "content"=>$content,
    "id"=>$id
]);

header( 'Location: index.php' );


