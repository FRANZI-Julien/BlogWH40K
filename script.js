$(document).ready()

$('form').submit(function(event) {
    //on stop la propagation de l'évènement
    event.preventDefault();
    //on récupère le contenu du champ de formulaire 
    let comment = $('#InputContent').val();
    let userPseudo = $('#pseudo').val();
    let date = "a few moments ago";
    //on l'affiche en console
    //console.log(comment);
    //on l'envoie en base de données via la requête ajax
    $.post('', { 
        content: comment,  
    } );
    $('<div><h3>' + userPseudo + '</h3><span>' + date + '</span><p>' + comment + '</p></div>').appendTo('#comments');
    //comme le champ de commentaire est toujours rempli, on le vide pour simuler l'envoi 
    $('#InputContent').val('');
})

})