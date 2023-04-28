<?php
require("../connect/db.php");
$id = "1";
$crime_type = $_POST['crime_type'];
$crime_description = $_POST['crime_description'];
$crime_axis = $_POST['crime_axis'];
$crime_location = $_POST['crime_location'];
$crime_victim = $_POST['crime_victim'];
$crime_suspect = $_POST['crime_suspect'];
$crime_date = $_POST['crime_date'];
$crime_time = $_POST['crime_time'];
$status = '1';
try {
    $s = "SELECT * FROM crimes where id = '$id'";
    $q = $conn->query($s);
    $r = $q->fetch_assoc();
    $q->close();

    $sql = "INSERT INTO reports (`reporter_id`, `crime_id`, `priority`, `location`, `crime_axis`, `crime_description`, `victim`, `suspect`, `crime_commit_report_date`, `crime_commit_report_time`, `status`, `last_review_date`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $query = $conn->prepare($sql);
    $query->execute([$id, $crime_type, $r['priority'], $crime_location, $crime_axis, $crime_description, $crime_victim, $crime_suspect, $crime_date, $crime_time, $status, $crime_date]);
    echo '1';
} catch (Exception $e) {
    echo $e;
}
