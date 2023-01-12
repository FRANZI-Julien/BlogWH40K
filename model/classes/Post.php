<?php 

class Post {

    private $id_post;
    
    private $title;

    private $date;

    private $content;

    private $picture;

    private $id_user;


    public function getIdPost() {
        return $this->id_post; 
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function setPicture($picture){
        $this->picture = $picture;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

}