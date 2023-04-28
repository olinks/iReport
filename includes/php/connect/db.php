<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$user = "root";
$password = "";
$dbname = "crime";

$conn = new mysqli($host, $user, $password, $dbname);
