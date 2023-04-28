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
                    <!-- <div class="page_title_right">
                        <div class="page_date_button">
                            March 1, 2023 - March 31, 2023
                        </div>
                        <div class="dropdown common_bootstrap_button ">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                action
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item f_s_16 f_w_600" href="#"> Download</a>
                                <a class="dropdown-item f_s_16 f_w_600" href="#"> Print</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 align align-centre">
                <div class="white_card card_height_100 mb_30 border">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">My Reports</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <!-- <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="dashboard?page=new_report" class="btn_1">Add New Report</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active" id="reports_table" name="reports_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Victim</th>
                                            <th scope="col">Crime</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">date</th>
                                            <th scope="col">time</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Axis</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="reports_table_body">
                                        <tr></tr>

                                        <!-- <tr>
                                            <th scope="row"> <a href="#" class="question_content"> title here 1</a></th>
                                            <td>ACategory name</td>
                                            <td>Teacher James</td>
                                            <td>Lessons name</td>
                                            <td>16</td>
                                            <td>$25.00</td>
                                            <td>$25.00</td>
                                            <td><a href="#" class="status_btn">Active</a></td>
                                        </tr> -->
                                    </tbody>
                                    <tfoot>
                                        <th scope="col">Victim</th>
                                        <th scope="col">Crime</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">date</th>
                                        <th scope="col">time</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Axis</th>
                                        <th scope="col">Status</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var data, info;
        var id = <?php echo $_SESSION['user_id']; ?>;
        console.log("id => ", id);
        var post_url = "includes/php/scripts/myReports.php?id=" + id + "";
        $.ajax({
            url: post_url,
            method: 'post',
            data: data,
            success: function(res) {
                // console.log(res);
                info = JSON.parse(res);
                var status;
                $.each(info, function(i, r) {
                    function getCrime(c) {
                        var crime;
                        if (c == '1') {
                            crime = "stealing";
                        } else if (c == '2') {
                            crime = "beating";
                        } else if (c == '3') {
                            crime = "rape";
                        } else if (c == '4') {
                            crime = "cultism";
                        } else if (c == '5') {
                            crime = "debt";
                        } else if (c == '6') {
                            crime = "conversion";
                        } else if (c == '7') {
                            crime = "shooting";
                        } else if (c == '7') {
                            crime = "stabing";
                        } else if (c == '7') {
                            crime = "robbing";
                        } else if (c == '7') {
                            crime = "malpractice";
                        } else if (c == '7') {
                            crime = "abuse/volga language";
                        }
                        return crime;
                    }

                    function getStatus(s) {
                        var status;
                        if (s == '1') {
                            status = '<a href="# " class="status_btn yellow_btn">Pending</a>';
                        } else if (s == '2') {
                            status = '<a href="# " class="status_btn ">Processed</a>';
                        }
                        return status
                    }
                    $('#reports_table').append(
                        "<tr>" +
                        "<td>" + r['victim'] + "</td>" +
                        "<td>" + getCrime(r['crime_id']) + "</td>" +
                        "<td>" + r['priority'] + "</td>" +
                        "<td>" + r['crime_commit_report_date'] + "</td>" +
                        "<td>" + r['crime_commit_report_time'] + "</td>" +
                        "<td>" + r['location'] + "</td>" +
                        "<td>" + r['crime_axis'] + "</td>" +
                        "<td>" + getStatus(r['status']) + "</td>" +
                        "</tr>"
                    );
                });
                // $('#reports_table').html('');
                console.log(info);
            },
            error: function(res) {
                console.log(res);
                alert("Error!!")
            }
        })
    });
</script>