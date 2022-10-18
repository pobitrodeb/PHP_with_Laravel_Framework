<!doctype html>
<html lang="en">
<head>
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>home</title>
<link rel="stylesheet" href="assetes/css/bootstrap.css"/>
<link rel="stylesheet" href="assetes/css/all.css"/>
</head>
<body>

<section class="">
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
        <div class="container">
            <a href="action.php?page=home" class="navbar-brand">PDN</a>
            <ul class="navbar-nav">
                <li><a href="action.php?page=home"    class="nav-link"> Home</a></li>
                <li><a href="action.php?page=product" class="nav-link"> About </a></li>
                <li class="dropdown">
                    <a href="action.php?page=product" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Product Categegory</a>
                    <ul class="dropdown-menu">
                      <?php foreach ($categories as $category) { ?>
                        <li><a href="action.php?page=category&&id=<?php echo $category['id']?>" class="dropdown-item"><?php echo $category['name'];?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <li><a href="action.php?page=gallery" class="nav-link"> Contact</a></li>
            </ul>
        </div>
    </nav>
