<?php 
require_once 'partials/header.php';
?>

<video playsinline="playsinline" class="video" autoplay="autoplay" muted="muted" loop="loop">
    <source src="image\Vid1.mp4" type="video/mp4">
</video>
<section class="hero text-center ">
    <img src="<?php echo $post->getPicture() ?>"alt="">
</section>

<section id="main" class="container">
    <h1 class="text-center h1 text-white"><?php echo $post->getTitle() ?></h1>
    <div id="caegories">
        <?php foreach($post_categories as $post_category){ ?>
            <a href="category.php?id=<?php echo $post_category->getIdCategory() ?>" class="badge rounded-pill text-bg-primary"><?php echo $post_category->getCategoryName() ?></a>
        <?php } ?>
    </div>
    By <a href="author.php?id=<?php echo $author->getIdUser() ?>" id="author" class="muted"><?php echo $author->getPseudo() ?></a>
    <p class="mt-3 text-white h4"><?php echo $post->getContent() ?></p>
</section>




<?php
require_once 'partials/footer.php';
?>