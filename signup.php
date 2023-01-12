<?php

require_once 'model/managers/UserManager.php';
require_once 'model/managers/CategoryManager.php';
//reception des données du formulaire
if(isset($_POST)&&!empty($_POST)){
    //sanitisation des données et chiffrement du mot de passe
    $pseudo = htmlentities($_POST['pseudo']);
    $email = htmlentities($_POST['email']);
    $mdp = $_POST['mdp'];
    $hashed_pwd = password_hash($mdp, PASSWORD_BCRYPT);
    //transmission à une méthode du manager pour enregistrer en bdd 
    UserManager::addUser($pseudo, $email, $hashed_pwd);
    //UserManager::connectUser(); à construire
}

$categories = CategoryManager::getAllCategories();

require_once 'views/signupView.php';