<?php

include_once 'include/header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
$id_session = $_SESSION['id'];
$select_cart = "SELECT * FROM cart WHERE id_user = '$id_session'";
$result_cart = $conn->query($select_cart);
foreach ($result_cart as $key_cart) {
    $id_product = $key_cart['id_product'];
 $select_pro = "SELECT * FROM products WHERE id = $id_product";
 $result_pro = $conn->query($select_pro);
 foreach ($result_pro as $key_pro) {
 

?>

                                <tr>
                                    <td class="cart-pic first-row"><img style="width: 100px;height: 100px;" src="images/<?php echo $key_pro['image']; ?>" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $key_pro['name']; ?></h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo $key_pro['discount']; ?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?php echo $key_cart['count']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$<?php echo $key_cart['total_price'];?></td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
<?php }  } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                  <!--   <li class="subtotal">Subtotal <span>$240.00</span></li> -->
                                  
                                    <li class="cart-total">Total <span>$<?php echo $total; ?></span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    
    <?php
include_once 'include/footer.php';
?>