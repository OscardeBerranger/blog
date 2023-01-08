<?php

// se connecter à la DB

//PDO
require_once ('pdo.php');
require_once ('libraries/tools.php');



$request = $pdo->query("SELECT * FROM posts");

$posts = $request->fetchAll();

//print_r($posts);

ob_start();

render("posts/index", [
    "posts"=>$posts,
    "pageTitle"=>"accueil du blog"
]);
