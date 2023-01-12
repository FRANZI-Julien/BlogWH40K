<?php
require_once './model/DBConnect.php';
require_once './model/classes/User.php';

class UserManager {

    public static function getUserInfos($id){
        $dbh = dbconnect();
        $query = "SELECT * FROM t_user WHERE id_user=:id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmt->fetch();
        return $user;
    }

    public static function getAuthorByPostId($id){
        $dbh = dbconnect();
        $query = "SELECT user.id_user, pseudo, email FROM user JOIN post ON post.id_user = user.id_user WHERE post.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmt->fetch();
        return $user;
    }
    public static function addUser($pseudo, $email, $mdp){
        $dbh = dbconnect();
        $query = "INSERT INTO user (pseudo, email, password) VALUES (:pseudo, :email, :mdp)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->execute();
    }

    public static function getUserByEmail($email){
        $dbh = dbconnect();
        $query = "SELECT * FROM user WHERE user.email = :email";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $stmt->fetch();
        return $user;
    }

    public static function connectUser($user){
        session_start();
        $_SESSION['user'] = [
            'id'=>$user->getIdUser(),
            'pseudo'=>$user->getPseudo(),
        ];
    }


}




