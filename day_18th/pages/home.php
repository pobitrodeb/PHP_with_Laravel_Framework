<?php include 'header.php';?>


    <meta charset="UTF-8">

            </section>

            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info text-white">
                                   <strong class=""> All Student Info</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr class="text-center">
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Student Email</th>
                                                <th>Student Mobile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($students as $student) {?>
                                               <tr>
                                                   <td><?php echo $student['id']?></td>
                                                   <td><?php echo $student['name']?></td>
                                                   <td><?php echo $student['email']?></td>
                                                   <td><?php echo $student['mobile']?></td>
                                               </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php include 'footer.php';?>


