<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$protype = new Protype;
$manu = new Manufactures;
$getAllManus = $manu->getAllManus();
include "header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="add.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="name" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="inputManuID">Manu ID</label>
                <select id="manuid" class="form-control custom-select" name="manuid">
                  <option selected disabled>Select one</option>
                  <?php foreach ($getAllManus as $value) :
                  ?>
                    <option value=<?php echo $value['manu_id'] ?>>
                      <?php echo $value['manu_name'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="inputTypeID">Type ID</label>
                <select id="typeid" class="form-control custom-select" name="typeid">
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllProType  = $protype->getAllProtype();
                  foreach ($getAllProType as $value) :
                  ?>
                    <option value=<?php echo $value['type_id'] ?>>
                      <?php echo $value['type_name'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPrice">Price</label>
                <input type="text" id="inputPrice" class="form-control" name="price">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" id="image" class="form-control" name="image">
              </div>
              <div class="form-group">
                <label for="inputDescription">Product Description</label>
                <textarea id="desc" class="form-control" rows="4" name="desc"></textarea>
              </div>
              <div class="form-group">
                <label for="inputFeature">Feature</label>
                <<input type="text" id="feature" class="form-control" name="feature">
                </select>
              </div>

            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html"; ?>