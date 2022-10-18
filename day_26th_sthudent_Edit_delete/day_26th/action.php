<?php
require_once 'vendor/autoload.php';
use App\classes\Home;

use App\classes\Student;
use App\classes\Database;
use App\classes\Product;

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {

        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'all-product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/all-product.php';
    }
    elseif ($_GET['page']=='edit')
    {
        $product = new Product();
        $singleProduct= $product->getProductByID($_GET['id']);
        include 'pages/edit.php';
    }
}
elseif (isset($_POST['submit_btn']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->newProduct();
    include 'pages/home.php';
}
elseif (isset($_POST['update_btn']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->updateProduct();
}
