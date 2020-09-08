<?php

include('functions.php');



if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}


/* session_start();

if (!isset($_SESSION['userlogin'])) {
    header('Location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header('Location: login.php');
}
 */

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template,  admin , dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title> Admin </title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class=""><a href="admin.php"><p>hhhhhhh</p></a></div>
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
                    <h6 class="mt-3 f-14"><?php echo $_SESSION['user']['user_type']; ?></h6>
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
                                <h3>Dashboard
                                    <small>Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="admin.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">


                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>Latest Orders</h5>
                                
                               
                            </div>
                            <div class="card-body order-datatable">
                                <div class="user-status table-responsive latest-order-table">
                                
                                    <table class="table table-bordernone">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Product Price</th>
                                                <th scope="col">Product Qty</th>
                                                <th scope="col">Order Date</th>
                                            
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = 'SELECT * FROM order_table 
                                            LEFT JOIN customer ON
                                            order_table.phone = customer.phone ORDER BY order_date DESC LIMIT 10';
                                            $result = mysqli_query($db, $query) or die("database error:" . mysqli_error($db));

                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>     
                                                <tr>
                                                    <td><?php echo $row['order_id'];?></td>
                                                    
                                                    <td class="font-primary"><a href="f.php"><?php echo $row['lname']; echo '  ' ; echo $row['fname']; ?></a></td>
                                                    <td class="font-warning"><?php echo $row['phone'];?></td>
                                                    <td class="digits"><?php echo $row['product_name'];?></td>
                                                    <td class="digits">&#8373; <?php echo sprintf("%01.2f", $row['product_price']);?></td>
                                                    <td class="digits"><?php echo $row['product_qty'];?></td>
                                                    <td class="digits"><?php echo $row['order_date'];?></td>
                                                </tr>
                                            <?php }?>
                                       
                                        </tbody>
                                    </table>
                               
                                    
                                </div>
                                <a href="order.php" class="btn btn-primary">View All Orders</a>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head1" title="" data-original-title="Copy">
                                        <i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head1">
        &lt;div class="user-status table-responsive latest-order-table"&gt;
            &lt;table class="table table-bordernone"&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th scope="col"&gt;Order ID&lt;/th&gt;
                        &lt;th scope="col"&gt;Order Total&lt;/th&gt;
                        &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
                        &lt;th scope="col"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;td&gt;1&lt;/td&gt;
                        &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                        &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
                        &lt;td class="digits"&gt;Delivered&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;2&lt;/td&gt;
                        &lt;td class="digits"&gt;$90.00&lt;/td&gt;
                        &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
                        &lt;td class="digits"&gt;Delivered&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;3&lt;/td&gt;
                        &lt;td class="digits"&gt;$240.00&lt;/td&gt;
                        &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
                        &lt;td class="digits"&gt;Delivered&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;4&lt;/td&gt;
                        &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                        &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
                        &lt;td class="digits"&gt;Delivered&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;5&lt;/td&gt;
                        &lt;td class="digits"&gt;$50.00&lt;/td&gt;
                        &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
                        &lt;td class="digits"&gt;Delivered&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
                                            </code></pre>
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
                        <p class="mb-0">Copyright 2020 © Trayton All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="../assets/js/chart/chartist/chartist.js"></script>

<!--chartjs js-->
<script src="../assets/js/chart/chartjs/chart.min.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="../assets/js/prism/prism.min.js"></script>
<script src="../assets/js/clipboard/clipboard.min.js"></script>
<script src="../assets/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="../assets/js/counter/jquery.waypoints.min.js"></script>
<script src="../assets/js/counter/jquery.counterup.min.js"></script>
<script src="../assets/js/counter/counter-custom.js"></script>

<!--peity chart js-->
<script src="../assets/js/chart/peity-chart/peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="../assets/js/chart/sparkline/sparkline.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!--dashboard custom js-->
<script src="../assets/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--height equal js-->
<script src="../assets/js/height-equal.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

</body>

</html>
