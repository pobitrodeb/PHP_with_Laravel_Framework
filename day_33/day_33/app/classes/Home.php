<?php


namespace App\classes;


class Home
{
 public function index()
 {
     session_start();
     $_SESSION['a'] = 'SEIP';
     header('Location:action.php?page=home');
 }
}