<?php
session_start();

if (!isset($_SESSION['userlogin'])) {
    header('Location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header('Location: login.php');
}

// Create database connection
$db = mysqli_connect('localhost', 'root', '', 'ecomm');

// Initialize message variable
$msg = '';

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['product_image']['name'];
    // Get text
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($db, $_POST['product_price']);
    $product_description = mysqli_real_escape_string($db, $_POST['product_description']);

    $product_quantity = mysqli_real_escape_string($db, $_POST['product_quantity']);
    $id = $_SESSION['userlogin']["admin_id"];

    $product_category = mysqli_real_escape_string($db, $_POST['category_name']);
    // image file directory
    $target = "images/" . basename($image);


    $sql = "INSERT INTO product (product_name, product_price, product_description, product_quantity, product_image, category_name, createdBy, updatedBy) 
        VALUES ( '$product_name','$product_price','$product_description','$product_quantity','$image','$product_category','$id','$id')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }


}
$result = mysqli_query($db, 'SELECT * FROM images');
$cat = mysqli_query($db, 'SELECT * FROM category');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
        name="description"
        content="Trayton admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
    />
    <meta
        name="keywords"
        content="admin template, Trayton admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="pixelstrap"/>
    <link
        rel="icon"
        href="../assets/images/dashboard/favicon.png"
        type="image/x-icon"
    />
    <link
        rel="shortcut icon"
        href="../assets/images/dashboard/favicon.png"
        type="image/x-icon"
    />
    <title>Admin</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"
    />

    <!-- Font Awesome-->
    <link
        rel="stylesheet"
        type="text/css"
        href="../assets/css/fontawesome.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css"/>

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css"/>
</head>
<body>
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="admin.php"><img class="blur-up lazyloaded"
                                                                    src="../assets/images/dashboard/multikart-logo.png"
                                                                    alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                    class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize-2"></i></a></li>


                    <!-- <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                     -->
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img
                                class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded"
                                src="../assets/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span
                                    class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <!--  <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>
                             <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                             <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                             <li><a href="#"><i data-feather="settings"></i>Settings</a></li> -->
                            <li><a href="admin.php?logout=true"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="admin.php"><img class="blur-up lazyloaded"
                                                                    src="../assets/images/dashboard/multikart-logo.png"
                                                                    alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png"
                              alt="#">
                    </div>
                    <h6 class="mt-3 f-14"><?php echo $_SESSION['userlogin']['username']; ?></h6>
                    <!-- <p>General Manager</p> -->
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="admin.php"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category.php"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a>
                                    </li>
                                    <li><a href="add-product.php"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.php"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>


                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>


                    <li><a class="sidebar-header" href="reports.html"><i
                                data-feather="bar-chart"></i><span>Reports</span></a></li>
                   

                    <li><a class="sidebar-header" href="admin.php?logout=true"><i
                                data-feather="log-in"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->


        <!-- Right sidebar Start-->

        <!-- Right sidebar Ends-->

        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>
                                    Add Products
                                    <small> Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item">
                                    <a href="admin.php"><i data-feather="home"></i></a>
                                </li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    <div class="col-xl-7">
                                        <form
                                            class="needs-validation add-product-form"
                                            novalidate="" enctype="multipart/form-data"
                                            method="POST" action="add-product.php"
                                        >
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-sm-4"
                                                       for="product_name"
                                                >Product Name :</label
                                                >
                                                <div
                                                    class="col-xl-8 col-sm-7 pl-0 description-sm"
                                                >
                                                    <input
                                                        class="form-control col-xl-8 col-sm-7"
                                                        id="product_name"
                                                        name="product_name"
                                                        type="text"
                                                        required=""
                                                    />
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-sm-4"
                                                       for="product_price"
                                                >Price :</label
                                                >
                                                <div
                                                    class="col-xl-8 col-sm-7 pl-0 description-sm"
                                                >
                                                    <input
                                                        class="form-control col-xl-8 col-sm-7"
                                                        id="product_price"
                                                        name="product_price"
                                                        type="text"
                                                        required=""
                                                    />
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                            </div>

                                            <div class="form">
                                                <div class="form-group row">
                                                    <label
                                                        for="category_name"
                                                        class="col-xl-3 col-sm-4 mb-0"
                                                    >Select Category :</label
                                                    >
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <select
                                                        class="form-control digits col-xl-8 col-sm-7"
                                                        id="category_name" name="category_name"
                                                    >
                                                        <?php
                                                        while ($row = mysqli_fetch_array($cat)) {
                                                            echo "<option>" . $row['category_name'] . "</option>";
                                                        }
                                                        ?>

                                                    </select>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-sm-4 mb-0"
                                                           for="product_quantity"
                                                    >Products Quantity :</label
                                                    >
                                                    <fieldset
                                                        class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                        <div class="input-group">
                                                            <input
                                                                id="product_quantity"
                                                                name="product_quantity"
                                                                class="touchspin"
                                                                type="text"
                                                                value="1"
                                                            />
                                                        </div>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </fieldset>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-sm-4"
                                                           for="product_description"
                                                    >Add Description :</label
                                                    >
                                                    <div
                                                        class="col-xl-8 col-sm-7 pl-0 description-sm"
                                                    >
                                <textarea
                                    class="form-control"
                                    name="product_description"
                                    id="product_description"
                                    type="text"
                                    required=""
                                    rows="3"
                                ></textarea>
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-sm-4"
                                                           for="image"
                                                    >Upload Image :</label>
                                                    <div
                                                        class="col-xl-8 col-sm-7 pl-0 description-sm"
                                                    >
                                                        <input
                                                            name="product_image"
                                                            type="file"
                                                            class="form-control-file"
                                                            id="product_image"

                                                            required=""

                                                        />
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary" name="upload">
                                                    Add
                                                </button>
                                                <button type="button" class="btn btn-light">
                                                    Discard
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">
                            Copyright 2020 © Trayton All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">
                            Hand crafted & made with<i class="fa fa-heart"></i>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- touchspin js-->
<script src="../assets/js/touchspin/vendors.min.js"></script>
<script src="../assets/js/touchspin/touchspin.js"></script>
<script src="../assets/js/touchspin/input-groups.min.js"></script>

<!-- form validation js-->
<script src="../assets/js/dashboard/form-validation-custom.js"></script>

<!-- ckeditor js-->
<script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
<script src="../assets/js/editor/ckeditor/styles.js"></script>
<script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="../assets/js/editor/ckeditor/ckeditor.custom.js"></script>

<!-- Zoom js-->
<script src="../assets/js/jquery.elevatezoom.js"></script>
<script src="../assets/js/zoom-scripts.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>
</body>

</html>
