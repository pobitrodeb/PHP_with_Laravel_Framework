<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Image Oparation
                    </div>
                <div class="card-body">

                    <form action="action.php" method="POST" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Name </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Image </label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">  </label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="image_btn" value="Submit">
                            </div>
                        </div>

                    </form>

                </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>