<?php
session_start();
include("inc/config.inc.php");

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!--jquery-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery -->

    <script type="text/javascript" src="script/cart.js"></script>

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
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <?php
                if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
                ?>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-table-container">

                                <table class="table table-cart" id="shopping-cart-results">
                                    <thead>
                                        <tr>
                                            <th class="product-col">Product</th>
                                            <th class="price-col">Price</th>
                                            <th class="qty-col">Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cart_box = '<ul class="cart-products-loaded">';
                                        $total = 0;
                                        $subtotals = 0;
                                        foreach ($_SESSION["products"] as $product) {
                                            $product_image = $product["product_image"];
                                            $product_name = $product["product_name"];
                                            $product_price = $product["product_price"];
                                            $product_code = $product["product_id"];
                                            $product_qty = $product["product_qty"];
                                            //$product_color = $product["product_color"];
                                            $subtotal = ($product_price * $product_qty);
                                            $subtotals = ($subtotals + $subtotal);
                                            $total = ($total + $subtotal);
                                        ?>
                                            <tr class="product-row">
                                                <td class="product-col">
                                                    <figure class="product-image-container">
                                                        <a href="product.php" class="product-image">
                                                            <img src="back-end/images/<?php echo $product_image ?>" alt="product">
                                                        </a>
                                                    </figure>
                                                    <h2 class="product-title">
                                                        <a href="#"><?php echo $product_name ?></a>
                                                    </h2>
                                                </td>
                                                <td><?php echo $currency;
                                                    echo $product_price ?></td>
                                                <td>
                                                    <input data-code="<?php echo $product_code; ?>" class="vertical-quantity quantity form-control" type="text" value="<?php echo $product_qty; ?>">
                                                </td>
                                                <td><?php echo $currency;
                                                    echo sprintf("%01.2f", ($product_price * $product_qty)); ?></td>
                                            </tr>
                                            <tr class="product-action-row">
                                                <td colspan="4" class="clearfix">


                                                    <div class="float-right">
                                                        <!-- <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a> -->
                                                        <a href="#" title="Remove product" data-code="<?php echo $product_code; ?>" class="btn-remove remove-item"><span class="sr-only">Remove</span></a>
                                                    </div><!-- End .float-right -->
                                                </td>
                                            </tr>



                                        <?php } ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="clearfix">
                                                <div class="float-left">
                                                    <a href="index.php" class="btn btn-outline-secondary">Continue Shopping</a>
                                                </div><!-- End .float-left -->

                                                <div class="float-right">
                                                    <!-- <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a> -->
                                                    <!-- <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a> -->
                                                </div><!-- End .float-right -->
                                            </td>
                                        </tr>

                                    </tfoot>


                                    </tbody>
                                </table>
                            </div><!-- End .cart-table-container -->


                        </div><!-- End .col-lg-8 -->

                        <div class="col-lg-4">
                            <div class="cart-summary">
                                <h3>Summary</h3>





                                <table class="table table-totals" id="shopping-cart-results">
                                    <tbody>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td><?php echo $subtotals ?></td>
                                        </tr>

                                        <tr>
                                            <td>Tax</td>
                                            <td>$0.00</td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Order Total</td>
                                            <?php
                                            if (isset($total)) {
                                            ?>
                                                <td><?php echo $currency; echo sprintf("%01.2f",$total); ?></td>
                                            <?php } ?>
                                        </tr>
                                    </tfoot>


                                </table>
                                <div class="checkout-methods">
                                    <a href="checkout-shipping.php" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>

                                </div><!-- End .checkout-methods -->



                            </div><!-- End .cart-summary -->
                        </div><!-- End .col-lg-4 -->

                    </div><!-- End .row -->
                <?php
                } else {
                    
                ?>
                     <strong><?php echo "Your cart is empty"; ?></strong>
                    <tfoot>
                        <br>
                        <br>
                        <br>
                        <tr>
                            <td colspan="4" class="clearfix">
                                <div class="float-left">
                                    <a href="index.php" class="btn btn-outline-secondary">Continue Shopping</a>
                                </div><!-- End .float-left -->


                            </td>
                        </tr>
                    </tfoot>
                <?php } ?>

            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include('inc/footer.php');?>
    </div><!-- End .page-wrapper -->

    
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
    </div><!-- End .mobile-menu-container -->
    

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>


</html>