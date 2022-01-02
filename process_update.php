<?php 
$ma = $_POST['ma'];
$name = $_POST['name'];
$bthday = $_POST['bthday'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$desc_txt = $_POST['desc_txt'];
require "./connect_db.php";
$truy_van = "update thanhvien
set name = '$name', bthday = '$bthday', gender = '$gender', email = '$email', desc_txt = '$desc_txt'
where ma = '$ma'";
mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);
header("Location: ./index.php");