<?php 

require_once './model/DBConnect.php';
require_once './model/classes/Category.php';

class CategoryManager {

    public static function getAllCategories(){
        $dbh = dbconnect();
        $query = "SELECT * FROM category";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

    public static function getCategoryInfos($id){
        $dbh = dbconnect();
        $query = "SELECT * FROM category WHERE id_category = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Category');
        $category = $stmt->fetch();
        return $category;
    }

    public static function getCategoriesByPostId($id){
        $dbh = dbconnect();
        $query = "SELECT category.id_category, category_name FROM category  JOIN post_category ON category.id_category = post_category.id_category JOIN post ON post_category.id_post = post.id_post WHERE post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories; 
    }

    public static function addCategory($name){
        $dbh = dbconnect();
        $query = "INSERT INTO category (category_name) VALUES (:name)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

}