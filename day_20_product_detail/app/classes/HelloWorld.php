<?php


namespace App\classes;


use http\Header;

class HelloWorld
{
    public $message;
    
    public function __construct()
    {
      $this->message = "<h1>Hello World</h1>";

    }

    public function index()
    {
       \header('Location:action.php?page=home');

    }
}