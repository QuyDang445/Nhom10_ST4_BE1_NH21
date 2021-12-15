<?php
include "header.php";
?>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-14">

                <!-- store products -->
                <div class="row">
                    <?php
                    if(isset($_GET['id'])):
                        $id = $_GET['id'];
                        $getProductsById = $product->getProductById($id);
                        foreach ($getProductsById as $value) :
                    ?>
                            <!-- product -->
                            <div class="col-md-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/<?php echo $value['pro_image'] ?>" alt="" width="100%" height="600">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                            <h3 class="product-name"><?php echo $value['name'] ?></h3>
                            <h4 class="product-price"><?php echo number_format($value['price']) ?>VND</h4>
                            <h4 class="product-description ">Mô tả: <br></h4>
                            <div><textarea rows="10" cols="70"> <?php echo $value['description'] ?> </textarea></div>
                            <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </div>
                            </div>
                            <!-- /product -->
                    <?php
                        endforeach;
                    endif
                    ?>
                </div>
                <!-- /store products -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<?php
include "footer.html";
?>