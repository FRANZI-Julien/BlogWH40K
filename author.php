<?php 
session_start(); 
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/UserManager.php';
require_once 'model/managers/PostManager.php';

//recoit l'id de l'utilisateur pour afficher les bonnes infos 
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $userInfos = UserManager::getUserInfos($id);
    if(!$userInfos){ //si on recoit un id qui ne correspond pas à un utilisateur, on redirige vers la page d'erreur 
        header('location:404.php');
    }
    $userPosts = PostManager::getPostsByUserId($id);
}else{ // si pas d'id => page d'erreur
    header('location:404.php');
}

$categories = CategoryManager::getAllCategories();

require_once 'views/authorView.php';