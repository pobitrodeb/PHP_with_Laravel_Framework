<?php include 'header.php'?>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <?php foreach ( $categoryProducts as $categoryProduct)  { ?>
                    <div class="col-md-3 mb-4">
                      <div class="card">
                          <img src="assetes/img/<?php echo $categoryProduct['img']; ?>" alt="" class="card-img-top" style="height: 250px;">
                          <div class="card-body">
                              <h4><?php echo $categoryProduct['name']; ?></h4>
                              <p><?php echo $categoryProduct['price']; ?></p>
                              <hr>
                              <a href="" class="btn btn-success px-5"> Detail</a>
                          </div>
                      </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

<?php include 'footer.php'?>