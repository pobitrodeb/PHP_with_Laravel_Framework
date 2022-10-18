<?php
require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Product;

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $helloWorld = new HelloWorld();
        $students = $helloWorld->getAllStudent();
        include "pages/home.php";
    }
    elseif ($_GET['page']=='product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include "pages/product.php";
    }
    elseif ($_GET['page']=='gallery')
    {
        include "pages/gallery.php";
    }
}