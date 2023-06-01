<?php
require_once 'partials/header.php';
?>
<div id="loadingOverlay"></div>
<video playsinline="playsinline" class="video" autoplay="autoplay" muted="muted" loop="loop">
    <source src="image\vid2.mp4" type="video/mp4">
</video>
<h1 class="text-center mt-5 text-white">S'enregistrer</h1>

<form action="" method="POST" class="col-md-6 offset-md-3 mt-5">
        <div class="mb-3">
            <label for="InputPseudo" class="form-label text-white">Pseudo de l'utilisateur</label>
            <input type="text" class="form-control" id="InputPseudo" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="InputEmail" class="form-label text-white">Email de l'utilisateur</label>
            <input type="email" class="form-control" id="InputEmail" name="email">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label text-white">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="btn btn-warning " type="submit">S'enregistrer</button>
    </form>



<?php 
require_once 'partials/footer.php';
?>