<?php 
$ma = $_GET['ma'];
require "./connect_db.php";
$truy_van = "DELETE FROM thanhvien WHERE ma = '$ma';";
mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);
header("Location: index.php");