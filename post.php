<?php

$id = null;

if(!empty($_GET['id']) && ctype_digit($_GET['id']) ){
    $id = $_GET['id'];
}
if($id){

    require_once('pdo.php');
    require_once ('libraries/tools.php');

    $query= $pdo->prepare('SELECT * FROM posts WHERE id=:id');

    $query->execute(["id"=>$id]);

    $post = $query->fetch();

    if(!$post){
        redirect('index.php');
    }

    $query = $pdo->prepare('SELECT * FROM comments WHERE post_id=:id');

    $query->execute(["id"=>$id]);

    $postComments = $query->fetchAll();


}

render("posts/post", [
    "post"=>$post,
    "postComments"=> $postComments,
    "pageTitle"=>$post['title']
]);
?>

?>

