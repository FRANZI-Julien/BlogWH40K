<?php 
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/UserManager.php';
require_once 'model/managers/PostManager.php';

//recoit l'id de l'utilisateur pour afficher les bonnes infos 
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $userInfos = UserManager::getUserInfos($id);
    $userPosts = PostManager::getPostsByUserId($id);
}

$categories = CategoryManager::getAllCategories();

require_once 'views/authorView.php';