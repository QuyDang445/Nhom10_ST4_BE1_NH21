<?php include "header.php"; 
$product = new Product;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%">
                           Name
                      </th>
                      <th style="width: 30%">
                          Image
                      </th>
                      <th>Price</th>
                      <th style="width: 40%">
                          description
                      </th>
                      <th style="width: 8%">
                          Manufacture
                      </th>
                      <th style="width: 8%">
                          Protype
                      </th>
                      <th style="width: 20%">
                      Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $getALLProducts = $product->getALLProducts();
                  foreach ($getALLProducts as $value): ?>
                  <tr>
                      <td>
                          <?php echo $value['id']; ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $value['name'] ?>
                          </a>
                          
                      </td>
                      <td> 
                         <img src="../img/<?php echo $value['pro_image']?>" style="width:50px"></td>   
                      </td>
                      <td class="project_progress"><?php echo number_format($value['price'])?>VND
                      </td>
                      <td class="project-state" ><?php  echo substr($value['description'],0,50);?>
                      </td>
                      <td class="project-state"><?php echo $value['manu_name']; ?>
                      </td>
                      <td class="project-state"><?php echo $value['type_name']; ?>
                      </td>
                      <td class="project-acttions text-right">
                          <a class="btn btn-info btn-sm" href="editproduct.php?id=<?php echo $value ['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm"
                           href="delproduct.php?id=<?php echo $value['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
