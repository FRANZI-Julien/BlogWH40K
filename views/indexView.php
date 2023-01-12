<?php 
require_once 'partials/header.php';
//var_dump($posts);
?>

<video playsinline="playsinline" class="video" autoplay="autoplay" muted="muted" loop="loop">
    <source src="image\mylivewallpapers.com-Space-Marine-Warhammer-40K.mp4" type="video/mp4">
</video>

<section class="hero-section">
<div class="card-grid">
    <?php foreach($posts as $post) { ?>
        <a class="card" href="single.php?id=<?php echo $post->getIdPost() ?>">
            <div class="card__background" style="background-image: url(<?php echo $post->getPicture() ?>)"></div>
            <div class="card__content">
                <h1 class="card__category"><?php echo $post->getTitle() ?></h1>
                
            </div>
         </a>
         <?php } ?>
    <div>
</section>
<?php
require_once 'partials/footer.php';
?>