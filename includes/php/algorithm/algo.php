<?php include "../connect/db.php" ?>
<?php
$sql = "SELECT * FROM reports where status = '1 ORDER BY time DESC";
$r = $con->query($sql);
$result = "";
