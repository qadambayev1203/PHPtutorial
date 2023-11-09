<?php
$title = 'Blog';
require('includes/header.php');

require 'database.php';

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();

if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['DELETE'])){
  $post_id=$_POST['post_id'];

  $statement=$pdo->prepare("DELETE FROM posts WHERE id=?");
  $statement->execute([$post_id]);

  $_SESSION['post-delete']='Post Muaffaqiyatli O\'chirildi.';
  header("Location: blog.php");
  exit;
}

?>


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the
          creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="post-create.php" class="btn btn-primary my-2">Post yaratish</a>
          <a href="#" class="btn btn-secondary my-2">Bosh sahifa</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <?php if (isset($_SESSION['post-yaratildi'])): ?>
        <div class="alert alert-success" role="alert">
          <?= $_SESSION['post-yaratildi']; ?>
          <?php unset($_SESSION['post-yaratildi']); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['post-delete'])): ?>
        <div class="alert alert-danger" role="alert">
          <?= $_SESSION['post-delete']; ?>
          <?php unset($_SESSION['post-delete']); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['post-ozgartirildi'])): ?>
        <div class="alert alert-warning" role="alert">
          <?= $_SESSION['post-ozgartirildi']; ?>
          <?php unset($_SESSION['post-ozgartirildi']); ?>
        </div>
      <?php endif; ?>


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($posts as $post): ?>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>
              <div class="card-body">
                <a href="post.php?id=<?= $post['id']; ?>">
                  <h5>
                    <?= $post['title']; ?>
                  </h5>
                </a>
                <p class="card-text">
                  <?= $post['body']; ?>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="post.php?id=<?= $post['id']; ?>">
                      <button type="button" class="btn btn-sm btn-primary">View</button>
                    </a>
                    <a href="post-edit.php?id=<?= $post['id']; ?>">
                      <button type="button" class="btn btn-sm btn-warning">Edit</button>
                    </a>
                    <form method="POST" action="" onSubmit="return confirm('Rostdan ham o\'chirilsinmi')">
                      <input type="hidden" name="DELETE">
                      <input type="hidden" name="post_id" value="<?=$post['id'];?>">
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
                <small>
                  <?= $post['created_at']; ?>
                </small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>




  <?php require('includes/footer.php'); ?>