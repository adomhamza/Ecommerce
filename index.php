<?php

session_start();

// Create database connection
$db = mysqli_connect('localhost', 'root', '', 'ecomm');

$product = mysqli_query($db, 'SELECT * FROM product');





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ecommerce Store</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Ecommerce Store">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Segoe Script:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left header-dropdowns">



                        <div class="dropdown compare-dropdown">
                            <!--  <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-retweet"></i> Compare (2)
                            </a> -->

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <ul class="compare-products">
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.php">Lady White Top</a></h4>
                                        </li>
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.php">Blue Women Shirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-primary">Compare</a>
                                    </div>
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <p class="welcome-msg"> Welcome msg! </p>

                        <div class=" dropdown-expanded">
                            <a href="product.php">Log In</a>

                            <!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="index-2.html" class="logo">
                            <!--<img src="assets/images/logo.png" alt="Porto Logo">-->
                            <h2>Trayton Shop</h2>
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>



                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact">
                            <span>Call us now</span>
                            <a href="tel:#">(123) 456 7890</a>
                        </div><!-- End .header-contact -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.php">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.php">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn">View Cart</a>
                                        <a href="checkout-shipping.html" class="btn">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="index.php">Home</a></li>



                            <!--  <li class="float-right"><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                            <li class="float-right"><a href="#">Special Offer!</a></li> -->
                        </ul>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        <main class="main">
            <div class="container">
                <div class="home-slider owl-carousel owl-carousel-lazy owl-theme">
                    <div class="home-slide">
                        <img class="owl-lazy" src="assets/images/blog/post-1.jpg" alt="Post">
                    </div><!-- End .home-slide -->

                    <div class="home-slide">
                        <img class="owl-lazy" src="assets/images/blog/post-2.jpg" alt="Post">
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->
            </div><!-- End .container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>

                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>

                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="container home-container">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="subtitle">Featured Products</h2>
                        <div class="row row-sm justify-content-center">

                            <?php
                            while ($row = mysqli_fetch_array($product)) {
                            ?>
                                <div class="col-6 col-md-4 col-xl-3">
                                    <div class="product-default">
                                        <figure>
                                            <a href="product.php">
                                                <img style="height: 240px; width: 250px;" src="back-end/images/<?php echo $row['product_image'] ?>">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <h2 class="product-title">
                                                <a href="product.php"><?php echo $row['product_name'] ?></a>
                                            </h2>
                                            <div class="price-box">
                                                <span class="product-price">&#8373; <?php echo $row['product_price'] ?>.00</span>
                                            </div><!-- End .price-box -->
                                            <div class="product-action">
                                                <!-- <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a> -->
                                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                                <!--<a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>-->
                                            </div>
                                        </div><!-- End .product-details -->
                                    </div>
                                </div>
                            <?php
                            }
                            ?>






                            <!-- End .col-xl-3 -->






                        </div><!-- End .row -->
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar-home col-lg-3 order-lg-first">
                        <div class="widget widget-cats">
                            <h3 class="widget-title"><i class="icon-menu"></i>Shop By Categories</h3>

                            <ul class="catAccordion">
                                <li>
                                    <a href="category.html">Home</a>
                                </li>
                                <li>
                                    <a href="category.html">Fashion</a>
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"></button>

                                    <ul class="collapse" id="accordion-ul-1">
                                        <li><a href="#">WOMEN CLOTHES</a></li>
                                        <li><a href="#">MEN CLOTHES</a></li>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>





                            </ul>
                        </div><!-- End .widget -->

                        <div class="widget widget-features">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-12">
                                    <div class="feature-box">
                                        <i class="icon-star-empty"></i>

                                        <h3>Dedicated Service</h3>
                                        <p>We really care about you</p>
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-12 col-sm-6 col-lg-12">
                                    <div class="feature-box">
                                        <i class="icon-reply"></i>

                                        <h3>Free Returns</h3>
                                        <p>Terms and conditions apply</p>
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="partners-container">
                <div class="container">
                    <h2 class="subtitle subtitle-line mb-6"><span>Featured Brands</span></h2>
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/3.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/4.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/5.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->

            <div class="container">
                <h2 class="subtitle subtitle-line mb-5"><span>New Arrivals</span></h2>

                <div class="new-arrivals-products owl-carousel owl-theme owl-nav-bottom">
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-1.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-2.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-3.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-4.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-5.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-6.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default">
                        <figure>
                            <a href="product.php">
                                <img src="assets/images/products/product-7.jpg">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.php">Product Short Name</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div><!-- End .price-box -->
                            <div class="product-action">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .new-arrivals-products -->
            </div><!-- End .container -->

            <div class="mb-5 mb-md-6 mb-lg-7"></div><!-- margin -->
        </main><!-- End .main -->

        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="widget widget-about">
                                <h4 class="widget-title">About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique augue eget enim feugiat blandit. Phasellus bibendum ex leo, at egestas lacus pellentesque in x leo, at egestas lacus.</p>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="widget-title">Contact Info</h4>
                                        <ul class="contact-info">
                                            <li>
                                                <span class="contact-info-label">Address:</span>123 Street Name, City, England<br>Pintrest street oklar
                                            </li>
                                        </ul>
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <ul class="contact-info">
                                            <li>
                                                <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                            </li>
                                        </ul>
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Featured Products</h4>

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Black Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Black Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-5.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Light Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$60.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Featured Products</h4>

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Black Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Black Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="assets/images/products/small/product-5.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Light Watch</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$60.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .widget -->
                                </div>




                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-top -->
            </div><!-- End .container -->

            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="#">Orders History</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#" class="login-link">Login</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-lg-5">
                            <div class="widget">
                                <!--  <h4 class="widget-title">Main Features</h4> -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--  <ul class="links">
                                            <li><a href="#">Super Fast Magento Theme</a></li>
                                            <li><a href="#">1st Fully working Ajax Theme</a></li>
                                            <li><a href="#">20 Unique Homepage Layouts</a></li>
                                        </ul> -->
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">

                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-3">
                            <div class="widget widget-social">
                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .col-md-3 -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <p class="footer-copyright">Trayton eCommerce. &copy; 2020. All Rights Reserved</p>
                        </div><!-- End .col-lg-4 -->

                        <div class="col-lg-5">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">newsletter</h4>
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Email address" required>

                                    <input type="submit" class="btn" value="Subscribe">
                                </form>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-lg-3">
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay">

    </div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.html">Full Width Banner</a></li>


                        </ul>
                    </li>
                    <li>
                        <a href="product.php">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>

                                    <li><a href="my-account.html">MY ACCOUNT </a></li>
                                    <!-- <li><a href="#">DAILY DEAL</a></li>
                                    <li><a href="#">MY WISHLIST </a></li>
                                    <li><a href="blog.html">BLOG</a></li>
                                    <li><a href="contact.html">Contact</a></li> -->
                                    <li><a href="#" class="login-link">LOG IN</a></li>
                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li>

                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.html">Contact Us</a></li>

                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->


    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body add-cart-box text-center">
                    <p>You've just added this product to the<br>cart:</p>
                    <h4 id="productTitle"></h4>
                    <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                    <div class="btn-actions">
                        <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                        <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>