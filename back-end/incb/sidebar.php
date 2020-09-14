<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="admin.php"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
            </div>
            <h6 class="mt-3 f-14"><?php echo $_SESSION['admin_user']['user_type']; ?></h6>
            <!-- <p>General Manager</p> -->
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="admin.php"><i data-feather="home"></i><span>Dashboard</span></a>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
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
            <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="order.php"><i class="fa fa-circle"></i>Orders</a></li>
                    <!-- <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li> -->
                </ul>
            </li>


            <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="admin-list.php"><i class="fa fa-circle"></i>Admin List</a></li>
                    <li><a href="user-list.php"><i class="fa fa-circle"></i>Customer List</a></li>
                    <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                </ul>
            </li>


            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>

            <li><a class="sidebar-header" href="admin.php?logout=true"><i data-feather="log-in"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>