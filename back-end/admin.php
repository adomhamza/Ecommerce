<?php

include('functions.php');



if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}


/*


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
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template,  admin , dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title> Admin </title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
        <?php include('incb/head.php'); ?>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <?php include('incb/sidebar.php'); ?>
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
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="bg-warning card-body">
                                    <div class="media static-top-widget row">
                                        <div class="icons-widgets col-4">
                                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                                        </div>
                                        <div class="media-body col-8"><span class="m-0">Today's Orders</span>
                                            <?php
                                                $query = 'SELECT count(*) AS today FROM order_table WHERE DATE(order_date)=DATE(NOW())';
                                                $result = mysqli_query($db, $query) or die("database error:" . mysqli_error($db));

                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>  
                                                <h3 class="mb-0"> 
                                                    <span class="counter"><?php echo $row['today'] ?></span></h3>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="bg-danger card-body">
                                    <div class="media static-top-widget row">
                                        <div class="icons-widgets col-4">
                                            <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                                        </div>
                                        <div class="media-body col-8"><span class="m-0">Customers</span>
                                        <?php
                                            $query = 'SELECT count(*) AS reg_customers FROM customer';
                                            $result = mysqli_query($db, $query) or die("database error:" . mysqli_error($db));

                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>  
                                            <h3 class="mb-0"> 
                                                <span class="counter"><?php echo $row['reg_customers'] ?></span></h3>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest Orders</h5>

                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive latest-order-table">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Number</th>
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
                                                        <td><?php echo $row['order_id']; ?></td>
                                                        <td class="font-primary"><a href="f.php"><?php echo $row['lname'];
                                                                                                    echo '  ';
                                                                                                    echo $row['fname']; ?></a></td>
                                                        <td class="font-warning"><?php echo $row['phone']; ?></td>
                                                        <td class="digits"><?php echo $row['product_name']; ?></td>
                                                        <td class="digits">&#8373; <?php echo sprintf("%01.2f", $row['product_price']); ?></td>
                                                        <td class="digits"><?php echo $row['product_qty']; ?></td>
                                                        <td class="digits"><?php echo $row['order_date']; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <a href="order.php" class="btn btn-primary">View All Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

            </div>

            <!-- footer start-->
            <?php include('incb/footer.php'); ?>
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