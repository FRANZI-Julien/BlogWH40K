<?php 
require_once 'partials/header.php';
require_once 'partials/animation.php';
?>

<h1 class="text-center mt-5">Editer un article</h1>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="InputTitle" class="form-label">Titre</label>
            <input type="text" class="form-control" id="InputTitle" name="title" value="<?php echo $post->getTitle() ?>">
        </div>
        <div class="mb-3">
            <label for="InputPicture" class="form-label">Image</label>
            <input type="file" class="form-control" id="InputPicture" name="picture">
        </div>
        <div class="mb-3">
            <label for="InputContent" class="form-label">Contenu</label>
            <textarea class="form-control" id="InputContent" name="content"><?php echo $post->getContent() ?></textarea>
        </div>
        <?php foreach($categories as $category){ ?>
        <div class="form-check">
            <?php if(in_array($category->getIdCategory(), $post_categories)) { ?>
                <input checked class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory() ?>" name="categories[]" id="<?php echo $category->getCategoryName() ?>">
                <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
                    <?php echo $category->getCategoryName(); ?>
                </label>
            <?php } else { ?>
                <input class="form-check-input" type="checkbox" value="<?php echo $category->getIdCategory() ?>" name="categories[]" id="<?php echo $category->getCategoryName() ?>">
                <label class="form-check-label" for="<?php echo $category->getCategoryName() ?>">
                    <?php echo $category->getCategoryName(); ?>
                </label>
            <?php } ?>
        </div>
        <?php } ?>

        <button class="btn btn-primary mt-3" type="submit">Editer</button>
    </form>
</div>

<?php
require_once 'partials/footer.php';
?>