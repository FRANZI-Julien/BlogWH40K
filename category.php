<?php 
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/PostManager.php';

//recoit l'id de la catégorie pour afficher les bonnes infos 
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $categoryInfos = CategoryManager::getCategoryInfos($id);
    $categoryPosts = PostManager::getPostsByCategoryId($id);
}

$categories = CategoryManager::getAllCategories();

require_once 'views/categoryView.php';
