<?php 

require_once './model/DBConnect.php';

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;

    public function __construct($id, $name, $description, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public static function getAll() {
        $db = dbconnect();
        $req = $db->query('SELECT * FROM products');
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = dbconnect();
        $req = $db->prepare('SELECT * FROM products WHERE id = :id');
        $req->execute(array('id' => $id));
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}
?>
