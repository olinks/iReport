<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <label class="form-label switch_toggle d-none d-lg-block" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="slider round open_miniSide"></div>
                </label>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <h3>
                        <a> Welcome <?php echo $_SESSION['user_fname']; ?> </a>
                    </h3>
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <div class="serach_button">
                                <i class="ti-search"></i>
                                <div class="serach_field-area d-flex align-items-center">
                                    <div class="search_inner">
                                        <form action="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search here...">
                                            </div>
                                            <button class="close_search"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                    <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                                </div>
                            </div>
                        </li>
                        <!-- User Bio -->

                        <!-- Notifications -->
                        <!-- <li>
                            <a class="bell_notification_clicker" href="#"> <img src="assets/img/icon/bell.svg" alt="">
                                <span>2</span>
                            </a>

                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>Cool Marketing </h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>Awesome packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>

                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="assets/img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#">
                                                <h5>what a packages</h5>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>

                        </li> -->
                        <!-- Chat icon -->
                        <!-- <li>
                            <a class="CHATBOX_open" href="#"> <img src="assets/img/icon/msg.svg" alt=""> <span>2</span> </a>
                        </li> -->
                    </div>
                    <div class="profile_info">
                        <img src="assets/img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <p>User </p>
                                <h5><?php echo $_SESSION['user_fname'] . " " . $_SESSION['user_lname']; ?></h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="#">My Profile </a>
                                <a href="#">Settings</a>
                                <a href="logout.php">Log Out </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>