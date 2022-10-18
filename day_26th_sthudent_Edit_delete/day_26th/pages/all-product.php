<?php include 'header.php';?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ALL PRODUCT INFORMATION</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price  </th>
                                    <th>Stock Amount </th>
                                    <th>Description </th>
                                    <th>Image </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <td><?php echo $product['name']; ?></td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $product['stock']; ?></td>
                                    <td><?php echo $product['description'];?></td>
                                    <td>
                                        <img src="<?php echo $product['image'];?>" alt="" height="40" width="60">
                                    </td>
                                    <td>
                                        <a href="action.php?page=edit&&id=<?php echo $product['id'];?>" class="btn btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
