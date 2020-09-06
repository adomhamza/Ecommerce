<?php
session_start();
//session_destroy();

// Create database connection
//$db = mysqli_connect('localhost', 'root', '', 'ecomm');
include_once("inc/db_connect.php");
include("inc/config.inc.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>✨Ecommerce Store✨</title>

    <meta name="keywords" content="Onlin Shop" />
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

    <!--jquery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <script type="text/javascript" src="script/cart.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <?php include('inc/head.php'); ?>

        <main class="main">
            <div class="container">
                <!--  <div class="home-slider owl-carousel owl-carousel-lazy owl-theme"> -->
                <!-- <div class="home-slide">
                        <img class="owl-lazy" src="assets/images/blog/post-1.jpg" alt="Post">
                    </div> -->
                <!-- End .home-slide -->

                <!-- <div class="home-slide">
                        <img class="owl-lazy" src="assets/images/blog/post-2.jpg" alt="Post">
                    </div> -->
                <!-- End .home-slide -->
                <!-- </div> -->
                <!-- End .home-slider -->
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
                            $query = 'SELECT * FROM product ORDER BY product_id DESC';
                            $result = mysqli_query($conn, $query) or die("database error:" . mysqli_error($conn));

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="col-6 col-md-4 col-xl-3">
                                    <form class="product-form">

                                        <div class="product-default">
                                            <figure>
                                                <a href="product.php">
                                                    <img style="height: 240px; width: 250px;" src="back-end/images/<?php echo $row['product_image'] ?>">
                                                </a>
                                            </figure>
                                            <div class="product-details">

                                                <h2 class="product-title">
                                                    <a href="product.php"><?php echo $row['product_name'] ?></a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8373; <?php echo number_format($row['product_price'], 2) ?></span>
                                                </div><!-- End .price-box -->
                                                <div class="product-action">

                                                    <input name="product_qty" type="hidden" value="1">
                                                    <input name="product_id" type="hidden" value="<?php echo $row["product_id"]; ?>">
                                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>ADD TO CART</button>
                                                    <!-- class="btn-icon btn-add-cart" -->
                                                </div>
                                            </div><!-- End .product-details -->
                                        </div>
                                    </form>

                                </div>
                            <?php
                            }
                            ?>






                            <!-- End .col-xl-3 -->






                        </div><!-- End .row -->
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar-home col-lg-3 order-lg-first">
                       <!--  <div class="widget widget-cats">
                            <h3 class="widget-title"><i class="icon-menu"></i>Shop By Categories</h3>

                            <ul class="catAccordion">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="category.php">Fashion</a>
                                    <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"></button>

                                    <ul class="collapse" id="accordion-ul-1">
                                        <li><a href="#">WOMEN CLOTHES</a></li>
                                        <li><a href="#">MEN CLOTHES</a></li>
                                        <li><a href="#">SHOES</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </li>





                            </ul>
                        </div> --><!-- End .widget -->

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

        <?php include('inc/footer.php'); ?>


    </div><!-- End .page-wrapper -->





    <?php include('inc/mobile-menu-container.php'); ?>
    <!-- End .mobile-menu-container -->





    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>