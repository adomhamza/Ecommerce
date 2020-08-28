<header class="header">

    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns"></div><!-- End .header-left -->
            <div class="header-right">
                <p class="welcome-msg">
                    <pre><?php print_r($_SESSION) ?></pre>
                </p>

                <div class=" dropdown-expanded">
                    <a href="product.php">Log In</a>

                    <!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->



    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <a href="index-2.html" class="logo">
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
                    <a href="view_cart.php" class="dropdown-toggle" role="button" title="View Cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <span class="cart-count" id="cart-container"><?php
                                                                        if (isset($_SESSION["products"])) {
                                                                            echo count($_SESSION["products"]);
                                                                        } else {
                                                                            echo 0;
                                                                        }
                                                                        ?></span>
                    </a>
                    <?php if (isset($_SESSION["products"]) && count($_SESSION["products"]) > 0) {
                        $cart_box = '<ul class="cart-products-loaded">';
                        $total = 0;
                        foreach ($_SESSION["products"] as $product) {
                            $product_name = $product["product_name"];
                            $product_price = $product["product_price"];
                            $product_code = $product["product_id"];
                            $product_qty = $product["product_qty"];
                            // $product_color = $product["product_color"];
                            $subtotal = ($product_price * $product_qty);
                            $total = ($total + $subtotal);
                    ?>
                            <div class="dropdown-menu">
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html"><?php echo $product_name ?></a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty"><?php echo $product_qty ?></span>
                                                    x <?php echo $product_price ?>
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            </figure>
                                        </div><!-- End .product -->


                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn">View Cart</a>
                                        <a href="checkout-shipping.html" class="btn">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                    <?php }
                    } ?>
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