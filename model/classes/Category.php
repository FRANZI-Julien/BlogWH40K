<?php 

class Category {

    private $id_category;

    private $category_name;

    public function getIdCategory(){
        return $this->id_category;
    }

    public function getCategoryName(){
        return $this->category_name;
    }

    public function setCategoryName($name){
        $this->category_name = $name;
    }

}