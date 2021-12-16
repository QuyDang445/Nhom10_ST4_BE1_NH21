<?php
include "header.php";
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Wish List</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
  <?php if(isset($_SESSION['username1'])): ?>
<h2 class="text-center">Your Wish</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
  <?php
   $user_name = $_SESSION['username1'];
   $getWList = $wishlist -> getWishList($_SESSION['username1']);
   foreach ($getWList as $value):
 ?>
   <td data-th="Product"> 
    <div class="row">
    <div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $value['pro_image'] ?>" style="width: 70px" alt="">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $value['name'] ?></h4> 
      <p><?php echo $value['description'] ?></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo number_format($value['price'])?> đ</td> 
   </td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger btn-sm" ><a href="delwish.php?id=<?php echo $value['wish_id'] ?>"><i class="fa fa-trash-o"></i></a>
    </button>
   </td>
  </tr>
  </tbody>
  <?php endforeach ; ?>
  <tfoot> 
   <tr> 
    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục xem sản phẩm</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
<?php else: ?>
  <div style="padding-bottom: 50px"><h2 class="text-center">Bạn Chưa <a href="login1.php">Đăng Nhập</a></h2></div>
<?php endif; ?>
<?php include "footer.html" ?>