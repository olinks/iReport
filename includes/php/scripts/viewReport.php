<?php include("../connect/db.php");
session_start();
$id = $_GET['id'];
try {
    $sql = "SELECT * FROM reports WHERE id = '" . $id . "'";
    $query = $conn->query($sql);
    $rs = $query->fetch_all(MYSQLI_ASSOC);
    echo json_encode($rs);
} catch (Exception $e) {
    echo $e;
}
