<?php 
require_once 'partials/header.php';

    // Vérifier si le cookie de consentement existe
    $cookieConsent = isset($_COOKIE['cookie_consent']);

    // Si le cookie de consentement n'existe pas, afficher le popup
    if (!$cookieConsent) {
?>
    <!-- Code HTML du bandeau de consentement aux cookies -->
    <div id="cookieBanner" class="cookie-banner">
        <div class="banner-content">
            <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies.</p>
            <div class="banner-buttons">
                <button id="acceptCookies" class="btn btn-primary">Accepter</button>
                <a href="/settings" class="btn btn-secondary">Paramètres des cookies</a>
                <a href="/" class="btn btn-link">Continuer sans accepter</a>
            </div>
        </div>
    </div>

    <!-- JavaScript pour gérer les événements du bandeau -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var acceptBtn = document.getElementById("acceptCookies");
            acceptBtn.addEventListener("click", function() {
                // Stocker le consentement dans un cookie
                document.cookie = "cookie_consent=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
                
                // Masquer le bandeau
                var cookieBanner = document.getElementById("cookieBanner");
                cookieBanner.style.display = "none";
            });
        });
    </script>

    <?php
}
?>
<!-- À l'emplacement où tu souhaites afficher l'effet de chargement -->
<div id="loadingOverlay"></div>

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