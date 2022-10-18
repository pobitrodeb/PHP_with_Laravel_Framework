<?php include 'header.php'?>

<section class="py-5">
   <div class="container">
       <div class="row">
           <div class="col-md-8 mx-auto">
               <div class="card">
                   <div class="card-header bg-light">Full Name Program</div>
                   <div class="card-body">

                       <form action="action.php" method="post">


                           <div class="row mb-3">
                               <label for="" class="col-md-3"> First Name </label>
                               <div class="col-md-9">
                                   <input type="text"  name="first_name" class="form-control">
                               </div>
                           </div>


                           <div class="row mb-3">
                               <label for="" class="col-md-3"> Last Name </label>
                               <div class="col-md-9">
                                   <input type="text"  name="last_name" class="form-control">
                               </div>
                           </div>


                           <div class="row mb-3">
                               <label for="" class="col-md-3"> Full Name </label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '';?>">
                               </div>
                           </div>


                           <div class="row mb-3">
                               <label for="" class="col-md-3"> </label>
                               <div class="col-md-9">
                                   <input type="submit" name="full_name_btn" class="btn btn-success w-100 " value="Make Full Name">
                               </div>
                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

<?php include 'footer.php'?>