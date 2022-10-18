<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\RandomNumber;
use App\classes\Image;
use App\classes\Student;

if (isset($_GET['page']))
{
    if($_GET['page']=='home')
    {

        include 'pages/home.php';
    }
}
elseif (isset($_POST['submit_btn']))
{
    $studnet = new Student($_POST);
    $studnet->newStudent();
//    echo '<pre>';
//    print_r($_POST);
//    print_r($_FILES);
}

//elseif (isset($_POST['image_btn']))
//{
//
// $getImage = new Image();
// $getImagefile = $getImage->getImage();
// include 'pages/home.php';
//
//}