<?php
require_once 'partials/header.php';
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traiter les données du formulaire et effectuer l'enregistrement

    // Afficher le popup de succès avec redirection vers login.php
    echo '<div class="success-popup-container">';
    echo '<div class="success-popup">';
    echo '<div class="success-popup-content">';
    echo '<h2>Enregistrement réussi !</h2>';
    echo '<p>Votre compte a été créé avec succès.</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Redirection vers login.php après 3 secondes
    echo '<script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
    </script>';
}
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