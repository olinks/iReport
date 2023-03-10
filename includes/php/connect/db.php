<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$user = "root";
$password = "password";
$dbname = "crime";

$con = new mysqli($host, $user, $password, $dbname);
