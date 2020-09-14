<?php
include('functions.php');

if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header('Location: login.php');
}


if (isset($_POST['upload'])) {
    // Get image name
    // $image = $_FILES['product_image']['name'];
    // Get text
    /*  $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
     $product_price = mysqli_real_escape_string($db, $_POST['product_price']);
     $product_description = mysqli_real_escape_string($db, $_POST['product_description']);

     $product_quantity = mysqli_real_escape_string($db, $_POST['product_quantity']);
     $id = $_SESSION['userlogin']["admin_id"];
      */
    $category_name = mysqli_real_escape_string($db, $_POST['category_name']);
    // image file directory
    /*  $target = "images/".basename($image);
*/
    $id = $_SESSION['userlogin']["admin_id"];
    $sql = "INSERT INTO category (category_name,createdBy,updatedBy) VALUES ('{$category_name}', '{$id}' , '{$id}')";

    // execute query
    mysqli_query($db, $sql);

    /* if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    } */


}

$cat = mysqli_query($db, 'SELECT * FROM category');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trayton admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Trayton admin template, dashboard template, flat admin template, responsive admin template, web app">
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

    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">

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
                                <h3>Orders
                                    <small>Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="admin.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item active">Orders</li>
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
                                <h5>Manage Order</h5>
                            </div>
                            <div class="card-body order-datatable">
                                <table class="display" id="basic-1">
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
                                            order_table.phone = customer.phone ORDER BY order_date DESC';
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
                                    <?php } ?>


                                    
                                    
                                    </tbody>
                                </table>
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

<!-- Datatable js-->
<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatables/custom-basic.js"></script>

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
