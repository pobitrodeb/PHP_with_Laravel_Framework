<?php include 'header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                         Login Here
                    </div>
                    <div class="card-body">

                        <form action="action.php" method="POST" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""> Email Address :  </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""> Password :  </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for=""> </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-primary" name="btn_submit">
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
