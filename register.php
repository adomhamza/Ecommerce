<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>✨Trayton - Register✨</title>

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
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
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

                    <div class="col-lg-4">

                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Register</h2>
                                <form method="post" action="register.php">
                                    <?php include('errors.php'); ?>


                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input class="form-control" title="For delivery questions." name="phone" value="<?php echo $phone; ?>" type="tel" required>
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
                                        <label>Name </label>
                                        <input class="form-control" name="name" value="<?php echo $name; ?>" type="text" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Email </label>
                                        <input class="form-control" name="email" value="<?php echo $email; ?>" type="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
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
                                            <label class="custom-control-label" for="customControlAutosizing1">
                                                <p style="margin-left: 10px;"> I agree to all statements in the <a href="#" class="pull-right">Terms &amp; Conditions</a></p>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="checkout-steps-action">
                                                <button type="submit" name="reg_user" class="btn btn-primary">Register</button>
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