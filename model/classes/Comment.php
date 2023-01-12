<?php 

class Comment {

    private $id_comment;

    private $id_post;

    private $id_user;

    private $date;

    private $content;

    public function getIdComment(){
        return $this->id_comment;
    }

    public function getIdPost(){
        return $this->id_post;
    }

    public function setIdPost($id){
        $this->id_post = $id;
    }

    public function getIdUser(){
        return $this->id_user;
    }

    public function setIdUser($id){
        $this->id_user = $id;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

}