<?php
session_start();





if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['msg'] = "You must log in first";
    $_SESSION['redirectUrl'] =  $_SERVER['REQUEST_URI'];   
    header('location: login_user.php');
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['name']);
    header("location: login_user.php");
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
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-name">First Name</label>
                                                <input type="text" class="form-control" id="acc-name" name="acc-name" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="acc-mname">First Name</label>
                                                <input type="text" class="form-control" id="acc-mname" name="acc-mname">
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Last Name</label>
                                                <input type="text" class="form-control" id="acc-lastname" name="acc-lastname" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-sm-11 -->
                            </div><!-- End .row -->

                            <div class="form-group required-field">
                                <label for="acc-email">Email</label>
                                <input type="email" class="form-control" id="acc-email" name="acc-email" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-password">Password</label>
                                <input type="password" class="form-control" id="acc-password" name="acc-password" required>
                            </div><!-- End .form-group -->

                            <div class="mb-2"></div><!-- margin -->

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="change-pass-checkbox" value="1">
                                <label class="custom-control-label" for="change-pass-checkbox">Change Password</label>
                            </div><!-- End .custom-checkbox -->

                            <div id="account-chage-pass">
                                <h3 class="mb-2">Change Password</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group required-field">
                                            <label for="acc-pass2">Password</label>
                                            <input type="password" class="form-control" id="acc-pass2" name="acc-pass2">
                                        </div><!-- End .form-group -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="form-group required-field">
                                            <label for="acc-pass3">Confirm Password</label>
                                            <input type="password" class="form-control" id="acc-pass3" name="acc-pass3">
                                        </div><!-- End .form-group -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End #account-chage-pass -->

                            <div class="required text-right">* Required Field</div>
                            <div class="form-footer">
                                <a href="#"><i class="icon-angle-double-left"></i>Back</a>

                                <div class="form-footer-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div><!-- End .form-footer -->
                        </form>
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="widget widget-dashboard">
                            <h3 class="widget-title">My Account</h3>

                            <ul class="list">
                                <li class="active"><a href="#">Account Dashboard</a></li>
                                <li><a href="#">Account Information</a></li>
                                <li><a href="#">Address Book</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">Billing Agreements</a></li>
                                <li><a href="#">Recurring Profiles</a></li>
                                <li><a href="#">My Product Reviews</a></li>
                                <li><a href="#">My Tags</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Applications</a></li>
                                <li><a href="#">Newsletter Subscriptions</a></li>
                                <li><a href="#">My Downloadable Products</a></li>
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