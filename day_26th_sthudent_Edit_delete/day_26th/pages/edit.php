<?php include "header.php"; ?>

    <section class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            PRODUCT EDIT :
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success my-3"> <?php echo isset($message) ? $message: '' ;?></h4>

                            <form action="action.php" method="POST" enctype="multipart/form-data">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Product Name  </label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="name" value="<?php echo $singleProduct['name'];?>">
                                        <input type="hidden" name="id" value="<?php echo  $singleProduct['id'];?>"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Product Price </label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" name="price" value="<?php echo $singleProduct['price'];?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Stock Amount </label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" name="stock" value="<?php echo $singleProduct['stock'];?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"> Product Description </label>
                                    <div class="col-md-9">
                                        <textarea  id="" cols="70" rows="5" name="description">
                                            <?php echo $singleProduct['description'];?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Image </label>
                                    <div class="col-md-9">
                                        <input type="file"  accept="image/*" class="form-control" name="image">
                                        <img src="<?php echo $singleProduct['image'];?>" alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">  </label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="update_btn" value="Update Product Info">
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