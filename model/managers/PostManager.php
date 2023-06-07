<?php 
//le rôle du manager étant d'interagir avec la bdd, c'est ici que l'on va récupérer le fichier qui contient la fonction correspondante
require_once './model/DBConnect.php';
//nous allons transcrire les données récupérées sous la forme d'objets de la classe Post, nous devons donc inclure le fichier correspondant  
require_once './model/classes/Post.php';

class PostManager {

    //on va ensuite définir différentes méthodes très ciblées 
    public static function getAllPosts() { //pour récupérer tous les articles
        $dbh = dbconnect(); //on récupère notre objet PDO
        $query = ("SELECT * FROM post"); //on écrit notre requête SQL
        $stmt = $dbh->prepare($query); //on prépare la requête
        $stmt->execute();//on l'execute 
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');//on transcris les résultats en objets de la class Post 
        return $posts;//puis on renvoie les résultats
    }

    public static function getPostById($id) { //pour récupérer un seul article par son id
        $dbh = dbconnect();
        $query = ("SELECT * FROM post WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $post = $stmt->fetch();
        return $post;
    }

    public static function getPostsByCategoryId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM post JOIN post_category ON post_category.id_post = post.id_post WHERE post_category.id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }

    public static function getPostsByUserId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM post JOIN user ON user.id_user = post.id_user WHERE post.id_user = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'Post');
        return $posts;
    }
    
    public static function addPost($title, $picture, $content, $userId) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = "INSERT INTO post (title, date, picture, content, id_user) VALUES (:title, '$date', :picture, :content, :id_user)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_user', $userId);
        $stmt->execute();
        return $dbh->lastInsertId();
    }

    public static function addPostCategories($id_post, $id_category){
        $dbh  = dbconnect();
        $query = "INSERT INTO post_category (id_post, id_category) VALUES (:post, :cat)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':post', $id_post);
        $stmt->bindParam(':cat', $id_category);
        $stmt->execute();
    }

    public static function editPost($id, $title, $picture, $content, $userId) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');
        $query = "UPDATE post SET title = :title, date = '$date', picture = :picture, content = :content, id_user = :id_user WHERE post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':picture', $picture);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_user', $userId);
        $stmt->execute();
    }

    public static function deletePostCategoriesByPostId($id){
        $dbh  = dbconnect();
        $query = "DELETE FROM post_category WHERE post_category.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
        
    public static function deletePost($id) {
        $dbh  = dbconnect();
        $query = "DELETE FROM post WHERE post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}