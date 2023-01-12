<?php

class User {

    private $id_user;

    private $pseudo; 

    private $email; 

    private $password;

    
    
    public function getIdUser(){
        return $this->id_user;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo; 
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}