<div class="post mt-3">
    <h3><?= $post['title'] ?></h3>
    <p><?= $post['content'] ?></p>
    <a href="delete-post.php?id=<?= $post['id'] ?>" class="btn btn-danger">supprimer</a>
    <a href="update-post.php?id=<?= $post['id'] ?>" class="btn btn-warning">Update</a>
    <a href="index.php" class="btn btn-success">retour</a>


    <div class="comments">
        <h3>Commentaires
            <?php
            if (!$postComments){
                echo "<p>Il n'y a pas de commentaires pour l'instant soit le premier a commenter</p>";
            }else{
                foreach ($postComments as $comment): ?>
                    <td><br><?= $comment['content']?></td>
                    <a href="update-comment.php" class="btn btn-warning">Update</a>
                    <a href="delete-comment.php?id=<?= $comment['id'] ?>" class="btn btn-danger">Delete</a>
                <?php endforeach; ?>
                <?php } ?>


    </div>

    <form method="post" class="form" action="create-comment.php">
        <input class="form-control"  type="text" name="content" placeholder="add a comment">
        <input name="id" class="form-control" type="hidden" value="<?= $post['id'] ?>">
        <button class="btn btn-success" type="submit">Send</button>
    </form>
</div>