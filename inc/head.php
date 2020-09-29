<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns">




            </div><!-- End .header-left -->

            <div class="header-right">
                <p class="welcome-msg">
                    <pre><?php print_r($_SESSION);?></pre>
                </p>

                <div class=" dropdown-expanded">
                    <a href="my-account.php">Log In</a>

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
                    <h2>Trayton</h2>
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search">
                    <!--  <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a> -->
                    <form action="#" method="get">
                        <!--  <div class="header-search-wrapper"> -->
                        <!--  <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    -->
                        <!--  <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>

                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>

                                        </select>
                                    </div> -->
                        <!-- End .select-custom -->
                        <!--  <button class="btn" type="submit"><i class="icon-magnifier"></i></button> -->
                        <!-- </div> -->
                        <!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div><!-- End .headeer-center -->

            <div class="header-right">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <div class="header-contact">
                    <span>Call us now</span>
                    <a href="tel:#">(+233) 545 854 178</a>
                </div><!-- End .header-contact -->

                <div class="dropdown cart-dropdown">
                    <a href="cart.php" class="dropdown-toggle" role="button">
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



                    
                </ul>
            </nav>
        </div><!-- End .header-bottom -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->