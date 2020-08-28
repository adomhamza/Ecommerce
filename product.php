    <!DOCTYPE html>
    <html lang="en">

    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Trayton Ecommerce Store</title>

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Ecommerce Store">
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



                            <div class="dropdown compare-dropdown">
                               <!--  <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-retweet"></i> Compare (2)
                                </a> -->

                                <div class="dropdown-menu" >
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
                                <!-- <div class="header-menu">
                                    <ul>
                                        <li><a href="my-account.html">MY ACCOUNT </a></li>
                                        <li><a href="#">DAILY DEAL</a></li>
                                        <li><a href="#">MY WISHLIST </a></li>
                                        <li><a href="blog.html">BLOG</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#" class="login-link">LOG IN</a></li>
                                    </ul>
                                </div> --><!-- End .header-menu -->
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
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Item</li>
                        </ol>
                    </div><!-- End .container -->
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-single-container product-single-default">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 product-single-gallery">
                                        <div class="product-slider-container product-item">
                                             <div class="product-single-carousel owl-carousel owl-theme">
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-1.jpg" data-zoom-image="assets/images/products/zoom/product-1-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-2.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-3.jpg" data-zoom-image="assets/images/products/zoom/product-3-big.jpg"/>
                                                </div>
                                                <div class="product-item">
                                                    <img class="product-single-image" src="assets/images/products/zoom/product-4.jpg" data-zoom-image="assets/images/products/zoom/product-4-big.jpg"/>
                                                </div>
                                            </div> 
                                            <!-- End .product-single-carousel -->
                                            <span class="prod-full-screen">
                                                <i class="icon-plus"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-1.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-2.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-3.jpg"/>
                                            </div>
                                            <div class="col-3 owl-dot">
                                                <img src="assets/images/products/zoom/product-4.jpg"/>
                                            </div>
                                        </div> -->
                                    </div><!-- End .col-lg-7 -->

                                    <div class="col-lg-5 col-md-6">
                                        <div class="product-single-details">
                                            <h1 class="product-title">Silver Porto Headset</h1>

                                            <!-- <div class="ratings-container"> -->
                                                <!-- <div class="product-ratings"> -->
                                                    <!-- <span class="ratings" style="width:60%"></span> --><!-- End .ratings -->
                                                <!-- </div> --><!-- End .product-ratings -->

                                                <!-- <a href="#" class="rating-link">( 6 Reviews )</a> -->
                                            <!-- </div> --><!-- End .product-container -->

                                           <!--  <div class="price-box">
                                                <span class="old-price">$81.00</span>
                                                <span class="product-price">$101.00</span>
                                            </div> --><!-- End .price-box -->

                                            <div class="product-desc">
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptates sed iure amet cupiditate non incidunt adipisci dolore corrupti 
                                                    quasi, at soluta. Necessitatibus officiis iusto asperiores eligendi iure in ducimus!</p>
                                            </div><!-- End .product-desc -->

                                            

                                            <div class="product-action product-all-icons">
                                                <div class="product-single-qty">
                                                    <input class="horizontal-quantity form-control" type="text">
                                                </div><!-- End .product-single-qty -->

                                                <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                                    <span>Add to Cart</span>
                                                </a>
                                                <!-- <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                    <span>Add to Wishlist</span>
                                                </a> -->
                                                <!-- <a href="#" class="paction add-compare" title="Add to Compare">
                                                    <span>Add to Compare</span>
                                                </a> -->
                                            </div><!-- End .product-action -->

                                            
                                        </div><!-- End .product-single-details -->
                                    </div><!-- End .col-lg-5 -->
                                </div><!-- End .row -->
                            </div><!-- End .product-single-container -->

                            <div class="product-single-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                                    </li>
                                   <!--  <li class="nav-item">
                                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                        <div class="product-desc-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                            <ul>
                                                <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                                <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                                <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                            </ul>
                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                                        <!-- <div class="product-tags-content">
                                            <form action="#"> -->
                                                <!-- <h4>Add Your Tags:</h4> -->
                                                <!-- <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" required>
                                                    <input type="submit" class="btn btn-primary" value="Add Tags">
                                                </div> --><!-- End .form-group -->
                                            </form>
                                            <!-- <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div> --><!-- End .product-tags-content -->
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                                        <div class="product-reviews-content">
                                            <div class="collateral-box">
                                                <ul>
                                                    <li>Be the first to review this product</li>
                                                </ul>
                                            </div><!-- End .collateral-box -->

                                            <div class="add-product-review">
                                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                                <p>How do you rate this product? *</p>

                                                <form action="#">
                                                    <table class="ratings-table">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Quality</td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Value</td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="form-group">
                                                        <label>Nickname <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div><!-- End .form-group -->
                                                    <div class="form-group">
                                                        <label>Summary of Your Review <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div><!-- End .form-group -->
                                                    <div class="form-group mb-2">
                                                        <label>Review <span class="required">*</span></label>
                                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                    </div><!-- End .form-group -->

                                                    <input type="submit" class="btn btn-primary" value="Submit Review">
                                                </form>
                                            </div><!-- End .add-product-review -->
                                        </div><!-- End .product-reviews-content -->
                                    </div><!-- End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .product-single-tabs -->
                        </div><!-- End .col-lg-9 -->

                        <div class="sidebar-overlay"></div>
                        <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
                        <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                            <div class="sidebar-wrapper">
                                <div class="widget widget-brand">
                                    <a href="#">
                                        <img src="assets/images/product-brand.png" alt="brand name">
                                    </a>
                                </div><!-- End .widget -->

                                <div class="widget widget-info">
                                    <ul>
                                        <li>
                                            <i class="icon-shipping"></i>
                                            <h4>FREE<br>SHIPPING</h4>
                                        </li>
                                        <li>
                                            <i class="icon-us-dollar"></i>
                                            <h4>100% MONEY<br>BACK GUARANTEE</h4>
                                        </li>
                                        <li>
                                            <i class="icon-online-support"></i>
                                            <h4>ONLINE<br>SUPPORT 24/7</h4>
                                        </li>
                                    </ul>
                                </div><!-- End .widget -->

                                <div class="widget widget-banner">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .widget -->

                                <div class="widget widget-featured">
                                    <h3 class="widget-title">Featured Products</h3>

                                    <div class="widget-body">
                                        <div class="owl-carousel widget-featured-products">
                                            <div class="featured-col">
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-1.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-2.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-3.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                            </div><!-- End .featured-col -->

                                            <div class="featured-col">
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-4.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-5.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                                <div class="product-default left-details product-widget">
                                                    <figure>
                                                        <a href="product.html">
                                                            <img src="assets/images/products/small/product-6.jpg">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h2 class="product-title">
                                                            <a href="product.html">Product Short Name</a>
                                                        </h2>
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .product-container -->
                                                        <div class="price-box">
                                                            <span class="product-price">$49.00</span>
                                                        </div><!-- End .price-box -->
                                                    </div><!-- End .product-details -->
                                                </div>
                                            </div><!-- End .featured-col -->
                                        </div><!-- End .widget-featured-slider -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .widget -->
                            </div>
                        </aside><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="featured-section">
                    <div class="container">
                        <h2 class="carousel-title">Featured Products</h2>

                        <div class="featured-products owl-carousel owl-theme owl-dots-top">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
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
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$9.00</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
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
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$9.00</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
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
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$9.00</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
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
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$9.00</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
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
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$9.00</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                        </div><!-- End .featured-proucts -->
                    </div><!-- End .container -->
                </div><!-- End .featured-section -->
            </main><!-- End .main -->

            <?php include('inc/footer.php');?>
        </div><!-- End .page-wrapper -->

        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

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


       

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

        <!-- Plugins JS File -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.min.js"></script>

        <!-- www.addthis.com share plugin -->
        <script src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b927288a03dbde6"></script>
    </body>

    </html>