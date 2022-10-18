<?php
require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getlAllCategory();

if(isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='category')
    {
        $categoryId = $_GET['id'];
        $product = new Product();
        $categoryProducts = $product->getProductByCategoryID($categoryId);
        include 'pages/category.php';
    }
}