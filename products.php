<?php include "header.php"; ?>
		<!-- BREADCRUMB -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<?php foreach ($getAllProtype as $value):?>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<label for="category-1">
										<span></span>
										<li><a href="products.php?type_id=<?php echo $value['type_id']; ?>"><?php echo $value['type_name'] ?></a></li>
									</label>
								</div>
							</div>
							<?php endforeach ?>
						</div>		
						<!-- /aside Widget -->

						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<?php foreach ($getAllManus as $value):?>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<label for="brand-1">
										<span></span>
										<li><a href="products2.php?manu_id=<?php echo $value['manu_id']; ?>"><?php echo $value['manu_name'] ?></a></li>
									</label>
								</div>	
							</div>
							<?php endforeach; ?>
						</div>
						<!-- /aside Widget -->

					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<?php
							if(isset($_GET['type_id'])):
								$type_id=$_GET['type_id'];
								$getProductByType=$product->getProductByType($type_id);
								// hiển thị 5 sản phẩm trên 1 trang
								$perPage = 3; 				
								// Lấy số trang trên thanh địa chỉ
								$page =isset($_GET['page'])?$_GET['page'] :1; 			
								// Tính tổng số dòng, ví dụ kết quả là 18
								$total = count($getProductByType); 					
								// lấy đường dẫn đến file hiện hành
								$url = $_SERVER['PHP_SELF']."?type_id=".$type_id;		
								$get3ProductByType=$product->get3ProductByType($type_id,$page,$perPage);
								foreach($get3ProductByType as $value):
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value['pro_image']?>" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="detail.php?id=<?php echo $value ['id'] ?>"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
										<button class="add-to-wishlist"><a  href="addwish.php?id=<?php echo $value['id'] ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></a></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach; ?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<?php echo $product->paginate($url, $total, $perPage);
								?>
							</ul>
						</div>
						<!-- /store bottom filter -->
						<?php endif; ?>
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include "footer.html" ?>

