<?php 
require_once 'partials/header.php';
require_once 'partials/animation.php';
?>

<h1 class="text-center mt-5">Ajouter une categorie</h1>

<div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label for="InputName" class="form-label">Nom de la catégorie</label>
            <input type="text" class="form-control" id="InputName" name="name">
        </div>
        <button class="btn btn-primary mt-3" type="submit">Ajouter la catégorie</button>
    </form>
</div>

<?php
require_once 'partials/footer.php';
?>