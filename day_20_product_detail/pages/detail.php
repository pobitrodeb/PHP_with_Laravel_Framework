<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
       <div class="row">
           <div class="col-md-6">

               <div class="card card-body">
                   <img src="assetes/img/<?php echo $singleProduct['image']; ?>" class="card-img-top" alt="">
               </div>
           </div>
           <div class="col-md-6">
                <div class="card card-body">
                    <h3><?php echo $singleProduct['name'];?> </h3>
                    <h4><?php echo $singleProduct['price']; ?></h4>
                    <hr/>
                    <h5>Category Name :</h5>
                    <h5>Brand Name : </h5>
                    <div class="description">
                        <h4><?php echo $singleProduct['description'];?></h4>
                        <p> <?php echo $singleProduct['price']; ?> </p>
                        <input type="number" class="form-control" value="1" min="1">
                    </div>
                </div>
           </div>
       </div>
    </div>
</section>

<?php include 'footer.php'?>
