<?php include "header.php";
$product = new Product;
$manu = new Manufactures;
$protype = new Protype;
$getcountProducts = $product->getcountProducts();
$getcountManus = $manu->getcountManus();
$getcountProtypes = $protype->getcountProtypes();?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <?php foreach($getcountProducts as $value): ?>
              <div class="inner">
                <h3><?php echo $value['c_product'] ?></h3>
                <p>Product</p>
              </div>
              <?php endforeach; ?>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="products.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <?php foreach($getcountManus as $value): ?>
              <div class="inner">
                <h3><?php echo $value['c_manu'] ?></h3>
                <p>Manu</p>
              </div>
              <?php endforeach; ?>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="manufacturess.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <?php foreach($getcountProtypes as $value): ?>
              <div class="inner">
                <h3><?php echo $value['c_protype'] ?></h3>
                <p>Protypes</p>
              </div>
              <?php endforeach; ?>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="protypes" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include "footer.html"?>
