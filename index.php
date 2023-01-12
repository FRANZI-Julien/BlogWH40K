<?php
//on va chercher nos managers pour pouvoir utiliser leurs fonctions 
require_once 'model/managers/PostManager.php';
require_once 'model/managers/CategoryManager.php';

//ici on mettra toute la logique du code
//nous aurons besoin de récupérer l'ensemble des catégories pour le menu
$categories = CategoryManager::getAllCategories();

//le but de la page d'accueil étant d'accueillir tous les articles, on récupère tous les articles
$posts = PostManager::getAllPosts(); 

//on inclus ensuite dans le fichier le code qui correspond à l'affichage de la page 
require_once 'views/indexView.php';


