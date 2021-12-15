
<h2 class="text-center">Your Wish</h2>
<div class="container">
<table id="cart" cless="table table-hover table-condensed">
<thead>
<tr>
<th style="width:50">Tên sản phẩm</th>
<th style="width:10"> Giá</th>
<th style="width:10"> </th>
</tr>
</thead>
<tbody><tr>
<?php
$user_name = $_SESSION ['user'];
$getWList = $wishlist -> getwishlist($_SESSION ['user']);
foreach ($getWList as $value):
?>
<td date-th="Product">
<div class="row">
<div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $value['image'] ?>" style="width: 70px" alt="">
 </div>
<div class="col-sm-10">
<h4 class="nomargin"><?php echo $value['nane'] ?></h4>
<p><?php echo $value['description'] ?></p>
</div>
</div>
</td>
<td data-th="Price"><?php echo number_format ($value['price'])?> đ</td>
</td>
<td class="actions" data-th="">
<button class="btn btn-danger btn-sm"><a href="delwish.php?id=<?php echo $value['wish_id']?>"><i class="fa fa-trash-o"></i></a>   
</button>
</td>
</tr>
</tbody>
<?php endforeach ;?>
<tfoot>
    <tr>
        <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> </a></td>
        <td colspan="2" class="hidden-xs"> </td>
        </tr>
        </tfoot>
</table>
</div>
<?php include "footer.html" ?>