<?php 
include('./back-end/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_14/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2020 23:46:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
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

                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <p class="welcome-msg">
                            <pre><?php print_r($_SESSION) ?></pre>
                        </p>

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
                        <a href="index.php" class="logo">
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
                            <a href="#" class="dropdown-toggle" role="button">
                                <span class="cart-count" id="cart-container"><?php
                                                                                if (isset($_SESSION["products"])) {
                                                                                    echo count($_SESSION["products"]);
                                                                                } else {
                                                                                    echo 0;
                                                                                }
                                                                                ?></span>
                            </a>

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
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <ul class="checkout-progress-bar">
                    <li>
                        <span>Shipping</span>
                    </li>
                    <li class="active">
                        <span>Review &amp; Payments</span>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">2 products in Cart</a>
                            </h4>

                            <div class="collapse" id="order-cart-section">
                                <table class="table table-mini-cart">
                                    <tbody>
                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Men Black Jacket</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$17.90</td>
                                        </tr>

                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Black Hoodie</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$7.90</td>
                                        </tr>
                                    </tbody>    
                                </table>
                            </div><!-- End #order-cart-section -->
                        </div><!-- End .order-summary -->

                        <div class="checkout-info-box">
                            <h3 class="step-title">Ship To:
                                <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                            </h3>

                            <address>
                                Desmond Mason <br>
                                123 Street Name, City, USA <br>
                                Los Angeles, California 03100 <br>
                                United States <br>
                                (123) 456-7890
                            </address>
                        </div><!-- End .checkout-info-box -->

                        <div class="checkout-info-box">
                            <h3 class="step-title">Shipping Method: 
                                <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                            </h3>

                            <p>Flat Rate - Fixed</p>
                        </div><!-- End .checkout-info-box -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title">Payment Method:</h2>

                            <h4>Check / Money order</h4>
                            
                            <div class="form-group-custom-control">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="change-bill-address" value="1">
                                    <label class="custom-control-label" for="change-bill-address">My billing and shipping address are the same</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div id="checkout-shipping-address">
                                <address>
                                    Desmond Mason <br>
                                    123 Street Name, City, USA <br>
                                    Los Angeles, California 03100 <br>
                                    United States <br>
                                    (123) 456-7890
                                </address>
                            </div><!-- End #checkout-shipping-address -->

                            <div id="new-checkout-address" class="show">
                                <form action="#">
                                    <div class="form-group required-field">
                                        <label>First Name </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Last Name </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Company </label>
                                        <input type="text" class="form-control">
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Street Address </label>
                                        <input type="text" class="form-control" required>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>City  </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option value="CA">California</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Zip/Postal Code </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Country</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option value="USA">United States</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="China">China</option>
                                                <option value="Germany">Germany</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group-custom-control">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="address-save">
                                            <label class="custom-control-label" for="address-save">Save in Address book</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->
                                </form>
                            </div><!-- End #new-checkout-address -->

                            <div class="clearfix">
                                <a href="#" class="btn btn-primary float-right">Place Order</a>
                            </div><!-- End .clearfix -->
                        </div><!-- End .checkout-payment -->

                        <div class="checkout-discount">
                            <h4>
                                <a data-toggle="collapse" href="#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                            </h4>

                            <div class="collapse" id="checkout-discount-section">
                                <form action="#">
                                        <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                        <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                                </form>
                            </div><!-- End .collapse -->
                        </div><!-- End .checkout-discount -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
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
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/small/product-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Black Watch</a>
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
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/small/product-5.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.html">Light Watch</a>
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
                                        <h4 class="widget-title">Twitter Feeds</h4>

                                        <div class="twitter-feed">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/twitter-feed.jpg" alt="user">
                                                </a>
                                            </figure>

                                            <div class="twitter-feed-content">
                                                <p><strong>Consectetur</strong> @adipiscing elit Nulla tristique augue eget enim <a href="#">feugiat look</a>...</p>

                                                <div class="twitter-feed-action">
                                                    <a href="#"><i class="icon-heart-1"></i></a>
                                                    <a href="#"><i class="icon-reply"></i></a>

                                                    <a href="#"><i class="icon-twitter"></i></a>
                                                </div><!-- End .twitter-feed-action -->
                                            </div><!-- End .twitter-feed-content -->
                                        </div><!-- End .twitter-feed -->

                                        <div class="twitter-feed">
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/twitter-feed.jpg" alt="user">
                                                </a>
                                            </figure>

                                            <div class="twitter-feed-content">
                                                <p><strong>Consectetur</strong> @adipiscing elit tristique <a href="#">feugiatlook</a>...</p>

                                                <div class="twitter-feed-action">
                                                    <a href="#"><i class="icon-heart-1"></i></a>
                                                    <a href="#"><i class="icon-reply"></i></a>

                                                    <a href="#"><i class="icon-twitter"></i></a>
                                                </div><!-- End .twitter-feed-action -->
                                            </div><!-- End .twitter-feed-content -->
                                        </div><!-- End .twitter-feed -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-6 -->
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
                                <h4 class="widget-title">Main Features</h4>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="#">Super Fast Magento Theme</a></li>
                                            <li><a href="#">1st Fully working Ajax Theme</a></li>
                                            <li><a href="#">20 Unique Homepage Layouts</a></li>
                                        </ul>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <ul class="links">
                                            <li><a href="#">Powerful Admin Panel</a></li>
                                            <li><a href="#">Mobile & Retina Optimized</a></li>
                                        </ul>
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
                            <p class="footer-copyright">Porto eCommerce. &copy;  2018.  All Rights Reserved</p>
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
                            <img src="assets/images/payments.png" alt="payment methods" class="footer-payments">
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category.html">Boxed Image Banner</a></li>
                            <li><a href="category.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
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
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->
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

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_14/checkout-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2020 23:46:33 GMT -->
</html>