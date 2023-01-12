<?php 
require_once 'partials/header.php';
?>
<h1 class="text-center mt-3"><?php echo $categoryInfos->getCategoryName() ?></h1>
<section class="container mt-5">
    <div class="row">
        <?php foreach($categoryPosts as $post) { ?>
            <div class="card col-12 col-md-4 col-lg-3">
                <img src="assets/img/<?php echo $post->getPicture() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
                    <a href="single.php?id=<?php echo $post->getIdPost() ?>" class="btn btn-primary">Voir l'article</a>
                </div>
            </div>
        <?php } ?> 
    </div>
</section>

<?php 
require_once 'partials/footer.php';
?>