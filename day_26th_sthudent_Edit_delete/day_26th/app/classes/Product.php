<?php


namespace App\classes;
use App\classes\Database;

class Product
{
    public $name, $price, $stock, $description, $imageName,  $imageUrl, $directory, $tempLocation, $sql, $db, $queryResult,  $result = [], $row, $id;

    public function __construct($post = null, $files = null)
    {
        if (isset($post ['name']))
        {
            $this->name         = $post['name'];
            $this->price        = $post['price'];
            $this->stock        = $post['stock'];
            $this->description  = $post['description'];
            if(isset($_POST['id']))
            {
                $this->id = $post['id'];
            }
        }
        if(isset($files['image']['size']) && $files['image']['size'] > 0)
        {
            $this->imageName    = time().$files['image']['size'];
            $this->directory    = 'assets/img';
            $this->tempLocation = $files['image']['size'];
            $this->imageUrl     = $this->directory.$this->imageName;
        }
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempLocation, $this->imageUrl);
        $this->sql = "INSERT INTO products(name, price, stock, description, image) VALUES ('$this->name', '$this->price', '$this->stock', '$this->description', '$this->imageUrl')";
        $this->db = new Database();
        mysqli_query($this->db->dbConnect(), $this->sql);
        return 'Product Info Save Successfully';
    }

    public function getAllProduct()
    {
        $this->sql = "SELECT * FROM products";
        $this->db  = new Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(), $this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->result, $this->row);
        }
        return $this->result;
    }

    public function getProductByID($id)
    {
        $this->sql = "SELECT * FROM products WHERE id='$id'";
        $this->db  = new Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(), $this->sql);

        $this->row = mysqli_fetch_assoc($this->queryResult);

        return $this->row;
    }

    public function updateProduct()
    {
       if($this->tempLocation)
       {
           move_uploaded_file($this->tempLocation, $this->imageUrl);

       }
       else{
           $this->row = $this->getProductByID($this->id);
           $this->imageUrl = 
           echo '<pre>';
           print_r($this->row);
           $this->imageUrl =
       }

//        $this->row = $this->getProductByID($_POST['id']);
//        echo '<pre>';
//        print_r($this->row);
    }

}