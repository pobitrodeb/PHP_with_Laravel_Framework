<?php


namespace App\classes;
use App\classes\Database;

class Auth
{
    private $email;
    private $password;
    private $db;
    private $user;
    private $queryResult;
    private $sql;

    public function __construct($post = null)
    {
        if(isset($post['email']))
        {
            $this->email        = $post['email'];
            $this->password     = $post['password'];
        }
    }

    public function login()
    {

        echo $this->email;
        echo $this->password;
        exit();
     $this->sql =   "SELECT * FORM users WHERE email = '$this->email' AND password = '$this->password'";
     $this->db = new Database();
     $this->queryResult = mysqli_query($this->db->dbConnect(), $this->sql);
     $this->user = mysqli_fetch_assoc($this->queryResult);
     return $this->user;
//     echo '<pre>';
//     print_r($this->user);
    }
}