<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="assetes/img/<?php echo $product['image'];?>" alt="">
                    <div class="card-body">
                        <h4><?php echo $product['name'];?></h4>
                        <p><?php echo $product['price'];?></p>
                        <hr/>
                        <a href="" class="btn btn-warning px-5"> Details</a>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
