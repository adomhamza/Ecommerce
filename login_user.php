<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Trayton - Login</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
               
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Log In</h2>

                                <form method="post" action="login_user.php">
                                    <?php include('errors.php'); ?>


                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="text" name="phone" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="We'll send your order confirmation here." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Password </label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <p>Sign in if you already have an account with us or <a href="register.php">Sign Up Here</a>
                                    </p>
                                    <!-- Already a member? -->
                                    <div class="form-footer">
                                        <button type="submit" name="login_user" class="btn btn-primary">LOGIN</button>
                                        <a href="forgot-password.php" class="forget-pass"> Forgot your password?</a>
                                    </div><!-- End .form-footer -->

                                </form>


                            </li>




                        </ul>
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Guest Checkout</h2>

                                <form method="post" action="login_user.php">
                                    <!-- <?php include('errors.php'); ?> -->

                                    <div class="form-group required-field">
                                        <label>Full Name </label>
                                        <input name="guest_name" type="text" title="First Name" class="form-control" required>
                                    </div>
                                    <!-- End .form-group -->

                                   
                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input class="form-control" title="For delivery questions." name="guest_phone"  type="tel" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Email </label>
                                        <input class="form-control" name="guest_email" title="Valid Email"  type="email" required>
                                    </div><!-- End .form-group -->


                                    <!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Region</label>
                                        <div class="select-custom">
                                            <select class="form-control" required name="guest_region">
                                               
                                               <option value="" disabled selected>Select Region</option>
                                                <option value="Ahafo Region">Ahafo Region</option>
                                                <option value="Ashanti Region">Ashanti Region</option>
                                                <option value="Bono-East Region">Bono-East Region</option>
                                                <option value="Brong-Ahafo Region">Brong Ahafo Region</option>
                                                <option value="Central Region">Central Region</option>
                                                <option value="Eastern Region">Eastern Region</option>
                                                <option value="Greater Accra">Greater Accra Region</option>
                                                <option value="Northern Region">Northern Region</option>
                                                <option value="North East Region">North East Region</option>
                                                <option value="Oti Region">Oti Region</option>
                                                <option value="Savannah Region">Savannah Region</option>
                                                <option value="Upper East Region">Upper East Region</option>
                                                <option value="Upper West Region">Upper West Region</option>
                                                <option value="Volta Region">Volta Region</option>
                                                <option value="Western Region">Western Region</option>
                                                <option value="Western-North Region">Western-North Region</option>
                                            </select>
                                        </div>
                                        <!-- End .select-custom -->
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group required-field">
                                        <label>City </label>
                                        <input class="form-control" name="guest_city" title="city" value="<?php echo $email; ?>" type="text" required>
                                    </div><!-- End .form-group -->




                                   

                                    <div class="form-terms">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input required type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">
                                                <p style="margin-left: 10px;"> I agree to all statements in the <a href="#" class="pull-right">Terms &amp; Conditions</a></p>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="checkout-steps-action">
                                                <button type="submit" name="guest_user" class="btn btn-primary">Checkout</button>
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

    <?php include('inc/mobile-menu-container.php'); ?><!-- End .mobile-menu-container -->


    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
</body>

</html>