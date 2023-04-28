<?php ?>
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <!-- <a class="large_logo" href="index-2.html"><img src="assets/img/logo.png" alt=""></a> -->
        <a class="large_logo" href="index-2.html">
            <h2>Crime iReport</h2>
        </a>
        <a class="small_logo" href="index-2.html"><img src="assets/img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a href="dashboard.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="assets/img/menu-icon/dashboard.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li>
            <a href="dashboard.php?page=new_report" aria-expanded="false">
                <div class="nav_icon_small">
                    <!-- <img src="assets/img/menu-icon/2.svg" alt=""> -->
                    <i class="fas fa-plus" style="
                        color : green;
                    "></i>
                </div>
                <div class="nav_title">
                    <span>Report Crime</span>
                </div>
            </a>
        </li>
        <!-- <li>
            <a href="index_3.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="assets/img/menu-icon/3.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Dark </span>
                </div>
            </a>
        </li> -->
        <h4 class="menu-text"><span>
                <hr>
            </span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="assets/img/menu-icon/16.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Reports</span>
                </div>
            </a>
            <ul>
                <li><a href="dashboard.php?page=my_reports">My Reports</a></li>
                <li><a href="dashboard.php?page=pending_reports">Pending Reports</a></li>
                <li><a href="dashboard.php?page=approved_reports">Approved Reports</a></li>
            </ul>
        </li>
        <?php if ($_SESSION['user_role'] == '1') { ?>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="assets/img/menu-icon/15.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Manage Users </span>
                    </div>
                </a>
                <ul>
                    <li><a href="dashboard.php?page=register_user"><i class="ti-user p-0"></i> Create New User</a></li>
                    <li><a href="dashboard.php?page="><i class="ti-user -p-2"></i>All Users</a></li>
                </ul>
            </li>
        <?php } ?>

    </ul>
</nav>