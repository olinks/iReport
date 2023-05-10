<?php include_once("includes/php/connect/db.php"); ?>
<?php include_once("includes/php/scripts/functions.php"); ?>
<?php $reportid = $_GET['report_id']; ?>
<?php if (!empty($reportid)) {
    $sql = "SELECT * FROM reports WHERE id='" . $reportid . "'";
    $query = $conn->query($sql);
    $report = $query->fetch_assoc();

    // $sql = "SELECT * FROM crimes WHERE id='".$report['crime_id']."'";
    // $c = $conn->query($sql);
    // $crimes = $c->fetch_assoc();
?>
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_25 f_w_700 dark_text">Report Review</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Report Review</li>
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
                                    <h3 class="m-0">Crime Review</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <h6 class="card-subtitle mb-2">Reported By: <b>
                                    <?php
                                    $reporterid = selecting_by_id("reports", $_GET['report_id'], $conn);
                                    $data = selecting_by_id("users", $reporterid["reporter_id"], $conn);
                                    echo $data['firstname'] . " " . $data['lastname'];
                                    ?>
                                </b>
                            </h6>
                            <form class="" name="report_form" id="report_form" method="POST">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="form-label col-sm-4 col-form-label">Type of Crime</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-label form-control" id="crime_type" name="crime_type" placeholder="Type Of Crime" readonly>
                                    </div>
                                    <!-- <div class="col-sm-8">
                                        <div class="common_select">
                                            <select class="nice_Select wide mb_30" id="crime_type" name="crime_type" readonly>
                                                <option value="">Select Type Of Crime</option>
                                                <?php
                                                // $sql = "SELECT * FROM crimes WHERE id='" . $report['crime_id'] . "'";
                                                // $crimes = $conn->query($sql);
                                                // while ($row = $crimes->fetch_assoc()) {
                                                //     echo '<option value="' . $crimes['id'] . ' selected">' . $crimes['crime'] . '</option>';
                                                // }
                                                ?>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_description" class="form-label col-sm-4 col-form-label">Crime Description</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-label form-control" id="crime_description" name="crime_description" placeholder="Describe the Crime" readonly></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_axis" class="form-label col-sm-4 col-form-label">Crime Axis</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-label form-control" id="crime_axis" name="crime_axis" placeholder="Crime Axis" readonly>
                                    </div>
                                    <!-- <div class="col-sm-8">
                                        <select class="nice_Select wide mb_30" id="crime_axis" name="crime_axis">
                                            <option value="">Select Axis</option>
                                            <?php
                                            // $sql = "SELECT * FROM location WHERE location_id='" . $report['location_id'] . "'";
                                            // $location = $conn->query($sql);
                                            // while ($row = $location->fetch_assoc()) {
                                            //     echo '<option value="' . $location['location_id'] . '">' . $location['location_name'] . '</option>';
                                            // }
                                            ?>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_location" class="form-label col-sm-4 col-form-label">Crime Location</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-label form-control" id="crime_location" name="crime_location" placeholder="Location of Crime" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_victim" class="form-label col-sm-4 col-form-label">Crime Victim</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-label form-control" id="crime_victim" name="crime_victim" placeholder="Victim" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_suspect" class="form-label col-sm-4 col-form-label">Crime Suspect </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-label form-control" id="crime_suspect" name="crime_suspect" placeholder="Suspect" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_date" class="form-label col-sm-4 col-form-label">Date of Crime</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-label form-control" id="crime_date" name="crime_date" placeholder="Location of Crime" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="crime_time" class="form-label col-sm-4 col-form-label">Time of Crime</label>
                                    <div class="col-sm-8">
                                        <input type="time" class="form-label form-control" id="crime_time" name="crime_time" value="<?php echo date("h:m:s"); ?>" placeholder="Time of Crime" readonly>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="approve_btn" id="approve_btn">Approve</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>

<?php } ?>

<script>
    $(document).ready(function() {
        let id = <?php echo $_GET['report_id']; ?>;
        let post_url = "includes/php/scripts/viewReport.php?id=" + id + "";
        var form_data = $(this).serialize(); //Creates new FormData object

        // Ajax call to PHP script
        $.ajax({
            url: post_url,
            method: "GET",
            success: function(res) {
                console.log(res);
                if (res) {
                    alert("Successfully Fetched Report");
                    let info = JSON.parse(res);
                    $("#crime_type").val(getCrime(info[0]['crime_id']));
                    $("#crime_axis").val(getAxis(info[0]['crime_id']));
                    $("#crime_description").val(info[0]['crime_description']);
                    $("#crime_location").val(info[0]['location']);
                    $("#crime_victim").val(info[0]['victim']);
                    $("#crime_suspect").val(info[0]['suspect']);
                    $("#crime_date").val(info[0]['crime_commit_report_date']);
                    $("#crime_time").val(info[0]['crime_commit_report_time']);
                }

            },
            error: function(res) {
                console.log(res);
            }
        })
        $("#approve_btn").click(function() {
            $.ajax({
                url: "includes/php/scripts/approveReport.php?report_id=" + id + "",
                method: post,
                success: function() {
                    alert("Approved");
                },
                error: function() {
                    alert("Error sending Approval");
                }
            })
        })
    });
</script>