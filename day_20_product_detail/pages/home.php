<?php include 'header.php';?>

<section class="py-5">
 <div class="container">
     <div class="row">
         <?php foreach ($products as $product) { ?>
         <div class="col-md-3 mb-4">
                 <div class="card">
                     <img src="assetes/img/<?php echo $product['image'];?>" class="card-img-top" alt="" height="250">
                     <div class="card-body">
                         <h4><?php echo $product['name'];?> </h4>
                         <h4><?php echo $product['price'];?>4</h4>
                         <hr/>
                         <a href="action.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-warning px-5">Detail</a>
                     </div>
                 </div>
             </div>
         <?php } ?>
         </div>
     </div>
 </div>
</section>

<?php include 'footer.php';?>