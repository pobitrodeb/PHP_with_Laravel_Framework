<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;

if(isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='login')
    {
        include 'pages/login.php';
    }
}
elseif (isset($_POST['btn_submit']))
{
   $auth = new Auth($_POST);
   $auth->login();
   $userName = $this->user;

}