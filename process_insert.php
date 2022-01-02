<?php
$name = $_POST['name'];
$bthday = $_POST['bthday'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$description = $_POST['desc_txt'];
require "./connect_db.php";
$truy_van = "insert into thanhvien(name,gender,email,bthday,desc_txt)
values('$name',$gender,'$email','$bthday','$description')";
mysqli_query($ket_noi, $truy_van);
mysqli_close($ket_noi);
header("Location: ./index.php");