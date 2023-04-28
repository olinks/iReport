<?php include_once("includes/php/connect/db.php"); ?>
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">

        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_25 f_w_700 dark_text">Report</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 align align-centre">
                <div class="white_card card_height_100 mb_30 border">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Report Crime</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <h6 class="card-subtitle mb-2">Report crimes happening close to you</h6>
                        <form class="" name="report_form" id="report_form" method="POST">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="form-label col-sm-4 col-form-label">Type of Crime</label>
                                <div class="col-sm-8">
                                    <div class="common_select">
                                        <select class="nice_Select wide mb_30" id="crime_type" name="crime_type">
                                            <option value="">Select Type Of Crime</option>
                                            <?php
                                            $sql = "SELECT * FROM crimes WHERE status='1'";
                                            $crimes = $conn->query($sql);
                                            while ($row = $crimes->fetch_assoc()) {
                                                echo '<option value="' . $row['id'] . '">' . $row['crime'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_description" class="form-label col-sm-4 col-form-label">Crime Description</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-label form-control" id="crime_description" name="crime_description" placeholder="Describe the Crime"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_axis" class="form-label col-sm-4 col-form-label">Crime Axis</label>
                                <div class="col-sm-8">
                                    <select class="nice_Select wide mb_30" id="crime_axis" name="crime_axis">
                                        <option value="">Select Axis</option>
                                        <?php
                                        $sql = "SELECT * FROM location WHERE status='1'";
                                        $crimes = $conn->query($sql);
                                        while ($row = $crimes->fetch_assoc()) {
                                            echo '<option value="' . $row['location_id'] . '">' . $row['location_name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_location" class="form-label col-sm-4 col-form-label">Crime Location</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-label form-control" id="crime_location" name="crime_location" placeholder="Location of Crime">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_victim" class="form-label col-sm-4 col-form-label">Crime Victim (<i>if available</i>)</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-label form-control" id="crime_victim" name="crime_victim" placeholder="Victim">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_suspect" class="form-label col-sm-4 col-form-label">Crime Suspect (<i>if available</i>) </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-label form-control" id="crime_suspect" name="crime_suspect" placeholder="Suspect">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_date" class="form-label col-sm-4 col-form-label">Date of Crime</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-label form-control" id="crime_date" name="crime_date" placeholder="Location of Crime">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="crime_time" class="form-label col-sm-4 col-form-label">Time of Crime</label>
                                <div class="col-sm-8">
                                    <input type="time" class="form-label form-control" id="crime_time" name="crime_time" value="<?php echo date("h:m:s"); ?>" placeholder="Time of Crime">
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Report</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#report_form').submit(function(e) {
            e.preventDefault();
            confirm("Do you want to Submit..");

            let post_url = "includes/php/scripts/newReport.php";
            var form_data = $(this).serialize(); //Creates new FormData object

            // Ajax call to PHP script
            $.ajax({
                url: post_url,
                method: 'post',
                data: form_data,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        alert("Successfully Reported");
                    }
                },
                error: function(res) {
                    console.log(res);
                }
            })
            // .done(function(res) {
            //     if (res == 1) {
            //         window.location.href = "dashboard?page=";
            //         // send response here
            //     } else {

            //     }
            // });
        })
    });
</script>