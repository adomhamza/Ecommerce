<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
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
    <?php include('inc/head.php'); ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <ul class="checkout-progress-bar">
                    <li class="active">
                        <span>Shipping</span>
                    </li>
                    <li>
                        <span>Review &amp; Payments</span>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Shipping Address</h2>

                                <form action="#">
                                    <div class="form-group required-field">
                                        <label>Email Address </label>
                                        <div class="form-control-tooltip">
                                            <input type="email" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="We'll send your order confirmation here." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Password </label>
                                        <input type="password" class="form-control" required>
                                    </div><!-- End .form-group -->
                                    
                                    <p>You already have an account with us. Sign in or continue as guest.</p>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">LOGIN</button>
                                        <a href="forgot-password.html" class="forget-pass"> Forgot your password?</a>
                                    </div><!-- End .form-footer -->
                                </form>

                                <form action="#">
                                    <div class="form-group required-field">
                                        <label>First Name </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Last Name </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Company </label>
                                        <input type="text" class="form-control">
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Street Address </label>
                                        <input type="text" class="form-control" required>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>City  </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option value="CA">California</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Zip/Postal Code </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>Country</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option value="USA">United States</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="China">China</option>
                                                <option value="Germany">Germany</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->
                                </form>
                            </li>

                            <li>
                                <div class="checkout-step-shipping">
                                    <h2 class="step-title">Shipping Methods</h2>

                                    <table class="table table-step-shipping">
                                        <tbody>
                                            <tr>
                                                <td><input type="radio" name="shipping-method" value="flat"></td>
                                                <td><strong>$20.00</strong></td>
                                                <td>Fixed</td>
                                                <td>Flat Rate</td>
                                            </tr>

                                            <tr>
                                                <td><input type="radio" name="shipping-method" value="best"></td>
                                                <td><strong>$15.00</strong></td>
                                                <td>Table Rate</td>
                                                <td>Best Way</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End .checkout-step-shipping -->
                            </li>
                        </ul>
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="order-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">2 products in Cart</a>
                            </h4>

                            <div class="collapse" id="order-cart-section">
                                <table class="table table-mini-cart">
                                    <tbody>
                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Men Black Jacket</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$17.90</td>
                                        </tr>

                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Black Hoodie</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$7.90</td>
                                        </tr>
                                    </tbody>    
                                </table>
                            </div><!-- End #order-cart-section -->
                        </div><!-- End .order-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-steps-action">
                            <a href="checkout-review.html" class="btn btn-primary float-right">NEXT</a>
                        </div><!-- End .checkout-steps-action -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->

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