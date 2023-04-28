<?php
session_start();
// header("Location: dashboard.php");
include "./includes/components/head.php";
?>

<body class="crm_body_bg">

    <section class=" dashboard_part large_header_bg">


        <div class=" ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <!-- <h3> Login</h3> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="white_box mb_30">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <div class="modal-content cs_modal">
                                        <div class="modal-header justify-content-center theme_bg_1">
                                            <h5 class="modal-title text_white">Log in</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form name="login_form" id="login_form">
                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Enter your Username" name="username">
                                                </div>
                                                <div class="">
                                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                                </div>
                                                <button type="submit" href="dashboard.php" class="btn_1 full_width text-center">Log in</button>
                                                <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#"> Sign Up</a></p>
                                                <div class="text-center">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> DashboardPack</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>



    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>


    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $('#login_form').submit(function(e) {
                let form_data = $(this).serialize();
                let post_url = "includes/php/scripts/Login.php"
                e.preventDefault();
                $.ajax({
                    url: post_url,
                    method: 'post',
                    data: form_data,
                    success: function(res) {
                        console.log(res);
                        if (res === '1') {
                            alert("Successfully Logged In");
                            window.location.href = "dashboard.php";
                        }
                    },
                    error: function(res) {
                        console.log(res);
                        alert("Error!!")
                    }
                })
            });
        });
    </script>
</body>


</html>
<?php // include "./includes/components/footer.php" 
?>