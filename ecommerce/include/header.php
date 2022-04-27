<?php 
session_start();
include 'fun/connection.php';
$select_site = "SELECT * FROM site_info";
$result_site = $conn->query($select_site);
$row_site = $result_site->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row_site['site_name']; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        <?php echo $row_site['email']; ?>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        <?php echo $row_site['phone']; ?>
                    </div>
                </div>
                <div class="ht-right">
                    <?php if(isset($_SESSION['id'])){
                        echo '<a href="fun/logout.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>';
                    }else
                    {
                        echo '<a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>';
                    }

                    ?>
                    
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="<?php echo $row_site['facebook']; ?>"><i class="ti-facebook"></i></a>
                        <a href="<?php echo $row_site['twitter']; ?>"><i class="ti-twitter-alt"></i></a>
                        <a href="<?php echo $row_site['instgram']; ?>"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>
<?php
$id_session = $_SESSION['id'];
$select_count = "SELECT * FROM cart WHERE id_user = '$id_session'";
$result_count = $conn->query($select_count);
$row_c = $result_count->num_rows;
echo $row_c;

 ?>                                        


                                    </span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
<?php 

$select_cart = "SELECT * FROM cart WHERE id_user = '$id_session'";
$result_cart = $conn->query($select_cart);
foreach ($result_cart as $key_cart) {
    $id_product = $key_cart['id_product'];
 $select_pro = "SELECT * FROM products WHERE id = $id_product";
 $result_pro = $conn->query($select_pro);
 foreach ($result_pro as $key_pro) {
 

?>
                                                <tr>
                                                    <td class="si-pic"><img style="width: 50px;height: 50px;" src="images/<?php echo $key_pro['image'] ?>" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$<?php echo $key_pro['discount']; ?> x <?php echo $key_cart['count']; ?></p>
                                                            <h6><?php echo $key_pro['name']; ?></h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
<?php }  }?>
                                            </tbody>
                                        </table>
                                    </div>
<?php 
$select_sum = "SELECT SUM(total_price) AS price_sum FROM cart WHERE id_user = '$id_session'";
$result_sum = $conn->query($select_sum);
$row_sum = $result_sum->fetch_assoc();
$total = $row_sum['price_sum'];


?>                                    
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$<?php echo $total; ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$<?php echo $total; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">Blog Details</a></li>
                                <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->