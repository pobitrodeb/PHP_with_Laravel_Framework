<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;
$product = new Product();
$category = new  Category();
$categories = $category->getAllCategory();
if(isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='detail')
    {
        $productID = $_GET['id'];
        $product = new Product();
        $singleProduct = $product->getAllProductID($productID);
        include 'pages/detail.php';
    }
    elseif ($_GET['page']=='category')
    {
        $categoryId = $_GET['id'];
        $products =  $product = $product->getCategoryProduct($categoryId);
        include 'pages/category.php';
    }
}