<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">

                    <div class="card-header">
                       Series Problem
                    </div>

                    <div class="card-body">

                        <form action="action.php" method="POST">

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Series Problem</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="strating_number" min="1">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea name="" class="form-control"> <?php echo isset($result) ? $result : '' ?> </textarea>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input name="series_btn" type="submit" class="btn btn-success" value="Submit">
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