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
                <div class="row">
                    <div class="col-lg-9 order-lg-last dashboard-content">
                        <h2 class="step-title">Register</h2>

                        <form form method="post" action="register.php">
                            <?php include('errors.php'); ?>
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-name">First Name</label>
                                                <input type="text" class="form-control" id="acc-name" name="acc-firstname" required>
                                            </div><!-- End .form-group -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
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
                                <label for="acc-phone">Phone Number</label>
                                <input type="tel" class="form-control" id="acc-phone" title="For delivery questions." name="acc-phone" required>
                            </div><!-- End .form-group -->


                            <div class="form-group required-field">
                                <label for="acc-email">Email</label>
                                <input type="email" class="form-control" id="acc-email" name="acc-email" required>
                            </div><!-- End .form-group -->


                            <div class="form-group required-field">
                                <label for="acc-region">Region</label>
                                <div class="select-custom">
                                    <select class="form-control" required name="acc-region">

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
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-city">City</label>
                                <input type="text" class="form-control" id="acc-city" name="acc-city" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-password">PIN</label>
                                <input type="password" class="form-control" id="acc-password" name="acc-password" required>
                            </div><!-- End .form-group -->

                            <div class="form-group required-field">
                                <label for="acc-password_2">Confirm PIN</label>
                                <input type="password" class="form-control" id="acc-password_2" name="acc-password_2" required>
                            </div><!-- End .form-group -->

                            <div class="mb-2"></div><!-- margin -->





                            <div class="required text-right">* Required Field</div>

                            <div class="form-terms">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input required type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1">
                                        <p style="margin-left: 10px;"> I agree to all statements in the <a href="#" class="pull-right">Terms &amp; Conditions</a></p>
                                    </label>
                                </div>
                            </div>
                            <div class="form-footer">
                                <a href="login.php"><i class="icon-angle-double-left"></i>Back</a>

                                <div class="form-footer-right">
                                    <button type="submit" name="register_user" class="btn btn-primary">Register</button>
                                </div>
                            </div><!-- End .form-footer -->
                        </form>
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-1">
                        
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