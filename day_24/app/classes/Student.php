<?php


namespace App\classes;
use App\classes\Database;


class Student
{
    public $name, $email, $mobile, $dbConnection, $sql, $database;

    public function  __construct($post)
    {
        $this->name         = $post ['name'];
        $this->email        = $post ['email'];
        $this->mobile       = $post ['mobile'];
    }
    public function newStudent()
    {
        $this->sql = "INSERT INTO students(name, email, mobile, image) VALUES ('$this->name', '$this->email', '$this->mobile', '1234')";
        $this->database = new Database();
        mysqli_query($this->database->dbConnect(), $this->sql);
        echo 'data insert successfully';
    }
}