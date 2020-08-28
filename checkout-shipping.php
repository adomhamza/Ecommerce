<?php


include('./back-end/functions.php');

/* if (!isset($_SESSION['user'])) {
    header('Location: back-end/login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header('Location: back-end/login.php');
} */
include("inc/config.inc.php");
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Trayton - Checkout</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
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
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <!-- <ul class="checkout-progress-bar">
                    <li class="active">
                        <span>Shipping</span>
                    </li> -->
                <!--  <li>
                        <span>Review &amp; Payments</span>
                    </li> -->
                <!--  </ul> -->
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Log In</h2>

                                <form method="post" action="checkout-shipping.php">

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="text" name="username" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="We'll send your order confirmation here." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Password </label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <p>Sign in if you already have an account with us or continue as guest below.</p>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">LOGIN</button>
                                        <a href="forgot-password.html" class="forget-pass"> Forgot your password?</a>
                                    </div><!-- End .form-footer -->

                                </form>


                            </li>


                        </ul>
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">

                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Register</h2>
                                <form method="post" action="checkout-shipping.php">

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input  class="form-control" name="username" value="<?php echo $username; ?>" type="tel" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <!--  <div class="form-group required-field">
                                        <label>First Name </label>
                                        <input type="text" class="form-control" required>
                                    </div> -->
                                    <!-- End .form-group -->

                                    <!--  <div class="form-group required-field">
                                        <label>Last Name </label>
                                        <input type="text" class="form-control" required>
                                    </div> -->
                                    <!-- End .form-group -->

                                    <!-- <div class="form-group">
                                        <label>Region</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option selected req disabled required hidden>Select Region</option>
                                                <option>Ahafo Region</option>
                                                <option>Ashanti Region</option>
                                                <option>Bono-East Region</option>
                                                <option>Brong Ahafo Region</option>
                                                <option>Central Region</option>
                                                <option>Eastern Region</option>
                                                <option>Greater Accra Region</option>
                                                <option>Northern Region</option>
                                                <option>North East Region</option>
                                                <option>Oti Region</option>
                                                <option>Savannah Region</option>
                                                <option>Upper East Region</option>
                                                <option>Upper West Region</option>
                                                <option>Volta Region</option>
                                                <option>Western Region</option>
                                                <option>Western-North Region</option>
                                            </select>
                                        </div> -->
                                    <!-- End .select-custom -->
                                    <!-- </div> -->
                                    <!-- End .form-group -->


                                    <div class="form-group required-field">
                                        <label>Email </label>
                                        <input class="form-control" name="email" value="<?php echo $email; ?>" type="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Password </label>
                                        <input required="" name="password_1" type="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Confirm Password </label>
                                        <input required="" name="password_2" type="password" class="form-control">
                                    </div>

                                    <div class="form-terms">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input required type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label  class="custom-control-label" for="customControlAutosizing1"><p style="margin-left: 10px;">  I agree to all statements in the <a href="#" class="pull-right">Terms &amp; Conditions</a></p></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="checkout-steps-action">
                                                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                                            </div><!-- End .checkout-steps-action -->
                                        </div><!-- End .col-lg-8 -->
                                    </div><!-- End .row -->
                                </form>
                            </li>
                        </ul>
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include('inc/footer.php'); ?>
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