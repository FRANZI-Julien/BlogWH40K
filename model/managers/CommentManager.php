<?php 

require_once 'model/DBConnect.php';
require_once 'model/classes/Comment.php';

class CommentManager{
    
    public static function getCommentsByPostId($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM t_comment WHERE t_comment.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, 'Comment');
        return $comments;
    }

    public static function addComment($id_post, $id_user, $content) {
        $dbh = dbconnect();
        $date = (new DateTime())->format('Y-m-d H:i:s');//ajouter la date car nécessaire à l'enregistrement du commentaire
        $query = "INSERT INTO t_comment (id_comment, id_post, id_user, date, content) VALUES (NULL, :idPost, :idUser, '$date', :content)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':idPost', $id_post);
        $stmt->bindParam(':idUser', $id_user);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
    }

    public static function deleteCommentsByPostId($id){
        $dbh  = dbconnect();
        $query = "DELETE FROM t_comment WHERE t_comment.id_post = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}