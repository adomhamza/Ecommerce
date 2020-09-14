<?php
include('functions.php');

if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>


<li><a class="sidebar-header"  href="welcome.php?logout='1'"><i
                                    data-feather="log-in"></i><span>Logout</span></a>
                    </li>
                

<h1>Welcome</h1>