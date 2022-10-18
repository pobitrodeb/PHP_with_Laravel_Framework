<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\RandomNumber;
use App\classes\Image;

if (isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $randomNumber = new RandomNumber();
        $radomdatas = $randomNumber->getAllData();
        include 'pages/home.php';
    }
}
elseif (isset($_POST['image_btn']))
{

 $getImage = new Image();
 $getImagefile = $getImage->getImage();
 include 'pages/home.php';

}