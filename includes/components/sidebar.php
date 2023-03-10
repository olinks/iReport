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
            <a href="index-2.html" aria-expanded="false">
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
                    <span>New Reports</span>
                </div>
            </a>
        </li>
        <li>
            <a href="index_3.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="assets/img/menu-icon/3.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Dark </span>
                </div>
            </a>
        </li>
        <h4 class="menu-text"><span>USERS</span> <i class="fas fa-ellipsis-h"></i> </h4>
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
                <li><a href="dashboard.php?page=register_user"><i class="ti-user"></i> Create New User</a></li>
                <li><a href="dashboard.php?page=">All Users</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="assets/img/menu-icon/16.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Pages</span>
                </div>
            </a>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="resister.html">Register</a></li>
                <li><a href="error_400.html">Error 404</a></li>
                <li><a href="error_500.html">Error 500</a></li>
                <li><a href="forgot_pass.html">Forgot Password</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>

    </ul>
</nav>