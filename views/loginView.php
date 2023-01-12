<?php
require_once 'partials/header.php';
?>
<video playsinline="playsinline" class="video" autoplay="autoplay" muted="muted" loop="loop">
    <source src="image\vid3.mp4" type="video/mp4">
</video>
<h1 class="text-center mt-5 text-white">Se connecter</h1>

<form action="" method="POST" class="col-md-6 offset-md-3 mt-5">
        <div class="mb-3">
            <label for="InputMail" class="form-label text-white">Pseudo de l'utilisateur</label>
            <input type="email" class="form-control" id="InputMail" name="email">
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label text-white">Mot de passe de l'utilisateur</label>
            <input type="password" class="form-control" id="InputPassword" name="mdp">
        </div>
        <button class="btn btn-warning" type="submit">se connecter</button>
    </form>

<?php 
require_once 'partials/footer.php';
?>