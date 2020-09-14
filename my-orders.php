<?php
//session_start();
//session_destroy();
include('server.php');
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

    <title>Account</title>

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
        <?php include('inc/head.php'); ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">

                    <div class="col-lg-9 order-lg-last dashboard-content">
                        <h2>Edit Account Information</h2>

                        <form action="#">

                            <table class="table table-cart" id="shopping-cart-results">
                                <thead>
                                    <tr>
                                        <th class="price-col">Product</th>
                                        <th class="price-col">Price</th>
                                        <th class="qty-col">Qty</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = "SELECT * FROM order_table WHERE phone = '" . $_SESSION['acc-firstname'] . "'";
                                    $result = mysqli_query($db, $sql);



                                    while ($row = mysqli_fetch_array($result)) {
                                     ?>

                                        <tr class="product-row">
                                            <td><?php echo $row['product_name']; ?></td>

                                            <td><?php echo $currency; echo $row['product_price']; ?></td>
                                            
                                            <td><?php echo $row['product_qty']; ?></td>
                                            
                                            <td> Confirmed</td>

                                            <td colspan="4" class="clearfix">
                                                <div class="float-right">
                                                    <a href="#" title="Remove product" data-code="<?php echo $product_code; ?>"><span>Remove</span></a>
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




                        </form>

                    </div><!-- End .col-lg-9 -->


                    <aside class="sidebar col-lg-3">
                        <div class="widget widget-dashboard">
                            <h3 class="widget-title">My Account</h3>

                            <ul class="list">
                                <li class="active"><a href="#">Account Dashboard</a></li>
                                <li><a href="#">Account Information</a></li>
                                <li><a href="#">Address Book</a></li>
                                <li><a href="my-orders.php">My Orders</a></li>
                                <li><a href="#">Billing Agreements</a></li>
                                <li><a href="#">Recurring Profiles</a></li>
                                <li><a href="#">My Product Reviews</a></li>
                                <li><a href="#">My Tags</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Applications</a></li>
                                <li><a href="#">Newsletter Subscriptions</a></li>
                                <li><a href="my-account.php?logout=true">Log Out</a></li>
                            </ul>
                        </div><!-- End .widget -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

        <?php include('inc/footer.php') ?>
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