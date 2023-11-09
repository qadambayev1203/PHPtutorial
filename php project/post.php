<?php
$title = 'Post';
require('includes/header.php');
require 'database.php';

$id=$_GET['id'];

$statement=$pdo->prepare("SELECT * FROM posts WHERE id=?");
$statement->execute([$id]);
$post=$statement->fetch();

?>

<div class="container mt-5 ">
    <h2>Id: <?= $post['id']; ?></h2>
    <h1 class="text-body-emphasis"><?= $post['title']; ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body']; ?></p>
    <p><?= $post['created_at']; ?></p>
    <hr>
    <div class="mb-5">
        <a href="blog.php" class="btn btn-primary btn-lg px-4">Back To</a>
    </div>



</div>

<?php require('includes/footer.php'); ?>