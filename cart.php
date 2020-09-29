<?php
session_start();
include("inc/config.inc.php");
$_SESSION['sales'] =[];

if (isset($_GET['remove'])) {
    unset($_SESSION['products'][$_GET['index']]);
    unset($_SESSION['sales']);
        
    //header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>✨Checkout -Trayton Store✨</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Ecommerce Store">
    <meta name="author" content="adomhamza">

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
        <?php include('inc/head.php'); ?>

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
                                        foreach ($_SESSION["products"] as $key => $product) {
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
                                                        <a href="cart.php?remove=true&index=<?php echo $key ?? '0'; ?>" title="Remove product" >Remove</a>
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
                                            <td><?php echo $currency; echo sprintf("%01.2f",$subtotals); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Tax</td>
                                            <td><?php echo $currency; ?> 0.00</td>
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
                                    <a href="checkout-review.php" class="btn btn-block btn-sm btn-primary">Confirm & Checkout</a>

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

        <?php include('inc/footer.php'); ?>
    </div><!-- End .page-wrapper -->


    <?php include('inc/mobile-menu-container.php') ?>


    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>


</html>