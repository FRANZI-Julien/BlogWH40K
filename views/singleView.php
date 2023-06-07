<?php 
require_once 'partials/header.php';
?>
<!-- À l'emplacement où tu souhaites afficher l'effet de chargement -->
<div id="loadingOverlay"></div>

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
    <div class="badge bg-primary mb-3">
        Commentaires <span class="badge text-bg-secondary"><?php echo count($comments) ?></span>
    </div>
    </section>
    <section class="comments">
    <div id="comment">
        <?php foreach($comments as $comment) { 
            $commentAuthor = UserManager::getCommentAuthorByCommentId($comment->getIdComment());?>
            <div>
                <h3><?php echo $commentAuthor->getPseudo() ?></h3>
                <span><?php echo $comment->getDate() ?></span>
                <p><?php echo $comment->getContent() ?></p>
            </div>
            <?php } ?>
    </div>
        
    <?php if(isset($_SESSION['user'])){ ?>
            <div id="addcomment">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="InputContent" class="form-label">Commenter</label>
                        <textarea class="form-control" id="InputContent" name="content"></textarea>
                        <input id="pseudo" type="hidden" value="<?php echo $_SESSION['user']['pseudo'] ?>">
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Soumettre le commentaire</button>
                </form>
    </div>
            <?php } ?>
            
            
            
</section>

<?php
require_once 'partials/footer.php';
?>