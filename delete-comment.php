<?php


//se connecter à la base de donnée

require_once('pdo.php');
require_once('libraries/tools.php');

$request = $pdo->query('SELECT * FROM comments');

$posts = $request->fetchAll();



$id = $_GET['id'];


$request = $pdo->prepare("DELETE FROM `comments` WHERE id=:id");

$request->execute(['id' => $id]);

redirect('index.php');