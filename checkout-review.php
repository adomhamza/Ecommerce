<?php
session_start();
include("inc/config.inc.php");






if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['msg'] = "You must log in first";
    $_SESSION['redirectUrl'] =  $_SERVER['REQUEST_URI'];
    header('location: login.php');
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Checkout </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="eCommerce">
    <meta name="author" content="adom hamza">

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
        <?php include('inc/head.php'); ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <?php
                if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
                ?>
                    <ul class="checkout-progress-bar">
                        <li>
                            <span>Shipping</span>
                        </li>
                        <li class="active">
                            <span>Review &amp; Payments</span>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-table-container">

                                <table class="table table-cart" id="shopping-cart-results">
                                    <thead>
                                        <div class="checkout-info-box">
                                            <h3 class="step-title">Ship To:
                                            </h3>
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





                                        <?php }
                                        ?>
                                        <address>
                                           <em style="font-size: larger;"> <?php echo $_SESSION["guest_name"] ?> </em><br>
                                           <em style="font-size: large;"> <?php echo $_SESSION["guest_city"] ?></em> <br>
                                           <em style="font-size: larger;"><?php echo $_SESSION["guest_region"] ?></em> <br>
                                           <em style="font-size: medium;"><?php echo $_SESSION["guest_phone"] ?></em> <br>

                                        </address>
                                        <br>
                                        <br>
                            </div><!-- End .checkout-info-box -->
                            <tfoot>


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
                                        <td><?php echo $currency; echo $subtotals ?></td>
                                    </tr>

                                    <tr>
                                        <td>Tax</td>
                                        <td><?php echo $currency;?>0</td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td>Order Total</td>
                                        <?php
                                        if (isset($total)) {
                                        ?>
                                            <td><?php echo $currency;
                                                echo sprintf("%01.2f", $total); ?></td>
                                        <?php } ?>
                                    </tr>
                                </tfoot>


                            </table>
                            <div class="checkout-methods">
                                <a href="checkout-review.php" class="btn btn-block btn-sm btn-primary">Confirm & Place Order</a>

                            </div><!-- End .checkout-methods -->



                        </div><!-- End .cart-summary -->
                    </div><!-- End .col-lg-4 -->

            </div><!-- End .row -->
        <?php
                }

        ?>


    </div><!-- End .container -->




    <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->

    <br><br>
    <?php include('inc/footer.php'); ?>
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <?php include('inc/mobile-menu-container.php'); ?>


    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>