<?php include 'header.php'?>


<section class="py-5">
    <div class="container">
        <div class="row">

           <div class="col-md-6">

               <div class="card">

                  <div class="card-header"><b>Registration Form</b></div>

                   <div class="card-body">
                       <form action="action.php" method="POST">

                           <div class="row mb-3">
                               <label for="" class="col-md-3">Full Name</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="name">
                               </div>
                           </div>

                           <div class="row mb-3">
                               <label for="" class="col-md-3">Email</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="email">
                               </div>
                           </div>

                           <div class="row mb-3">
                               <label for="" class="col-md-3">Mobile</label>
                               <div class="col-md-9">
                                   <input type="number" class="form-control" name="mobile">
                               </div>
                           </div>

                           <div class="row mb-3">
                               <label for="" class="col-md-3">Subject</label>
                               <div class="col-md-9">
                                   <?php foreach ($subjects as $subject)  { ?>
                                   <label for=""><input type="checkbox" name="subject[]" value="<?php echo $subject['name'];?>"> <?php echo $subject['name'];?> </label>
                                  <?php } ?>
                               </div>
                           </div>

                           <div class="row mb-3">
                               <label for="" class="col-md-3"></label>
                               <div class="col-md-9">
                                   <input type="submit" name="registration_submit" class="btn btn-success" value="Submit">
                               </div>
                           </div>

                       </form>
                   </div>

               </div>
           </div>


           <div class="col-md-6">
               <div class="card">
                   <div class="card-header bg-info">Student Detail Information</div>
                   <div class="card-body">

                       <table class="table table-bordered">
                           <tr>
                               <th>Student Name </th>
                               <td><?php echo isset($resultStudentinfo['name']) ?  $resultStudentinfo['name'] : ''?></td>
                           </tr>

                           <tr>
                               <th>Student Email</th>
                               <td><?php echo isset($resultStudentinfo['email']) ?  $resultStudentinfo['email'] : ''?></td>
                           </tr>

                           <tr>
                               <th>Student Mobile</th>
                               <td><?php echo isset($resultStudentinfo['mobile']) ?  $resultStudentinfo['mobile'] : ''?></td>
                           </tr>

                           <tr>
                               <th>Subject Name </th>
                              <td>
                                  <?php if(isset($resultStudentinfo['subjects'])) { ?>
                                  <ul>
                                      <?php foreach ($resultStudentinfo['subjects'] as $subject) { ?>
                                      <li><?php echo $subject?></li>
                                      <?php } ?>
                                  </ul>
                                <?php } ?>

                              </td>
                           </tr>
                       </table>
                   </div>

               </div>
           </div>


        </div>
    </div>
</section>


<?php include 'footer.php'?>