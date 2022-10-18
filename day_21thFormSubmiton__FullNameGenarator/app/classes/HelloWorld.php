<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    
    public function __construct()
    {
      $this->message = "<h1>Hello World</h1>";

    }

    public function index()
    {
        header('Location:action.php?page=home');

    }
}