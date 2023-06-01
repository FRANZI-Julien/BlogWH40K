// Chargement du contenu de la page d'effet de chargement
document.addEventListener('DOMContentLoaded', function() {
  var loadingOverlay = document.getElementById('loadingOverlay');

  // Fonction pour masquer l'effet de chargement
  function hideLoadingOverlay() {
      loadingOverlay.style.display = 'none';
  }

  // Création d'une requête AJAX pour récupérer le contenu de la page d'effet de chargement
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'loading.html', true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Remplacer le contenu de la balise <div> avec le contenu de la page d'effet de chargement
          loadingOverlay.innerHTML = xhr.responseText;

          // Temps d'attente pour masquer l'effet de chargement (facultatif)
          setTimeout(hideLoadingOverlay, 1000); // Par exemple, 1 seconde (1000 millisecondes)
      }
  };
  xhr.send();
});