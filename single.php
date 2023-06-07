<?php 
session_start();
require_once 'model/managers/PostManager.php';
require_once 'model/managers/CategoryManager.php';
require_once 'model/managers/UserManager.php';
require_once 'model/managers/CommentManager.php';

//cette page étant censée recevoir un id, on va d'abord vérifier qu'il est bien présent
if(isset($_GET['id'])&&!empty($_GET['id'])){
    //on le met dans une variable pour plus de simplicité par la suite
    $id = $_GET['id'];
    //on va chercher les informations de l'article qu'on souhaite afficher
    $post = PostManager::getPostById($id); //les infos de l'article
    if(!$post){ //si on recoit un id qui ne correspond pas à un article, on redirige vers la page d'erreur 
        header('location:404.php');
    }
    $post_categories = CategoryManager::getCategoriesByPostId($id);//les categories auxquelles il est relié
    $author = UserManager::getAuthorByPostId($id);
    $comments = CommentManager::getCommentsByPostId($id);
}else{//si on ne reçoit pas l'id depuis l'url, on redirige vers la page d'erreur
    header('location:404.php');
}

//cette page peut éventuellement recevoir le formulaire de commentaire
if(isset($_POST)&&!empty($_POST)){
    $post_id = $_GET['id'];
    $user_id = $_SESSION['user']['id'];
    $content = $_POST['content'];
    CommentManager::addComment($post_id, $user_id, $content);
    //header("location:single.php?id=$post_id&status=success&message=Votre commentaire a bien été ajouté");
}

//toutes nos catégories pour le menu de navigation
$categories = CategoryManager::getAllCategories();

require_once 'views/singleView.php';