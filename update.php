<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $ma = $_GET['ma'];
        require "./connect_db.php";
        $truy_van = "select * from thanhvien
        where ma = '$ma'";
        $ket_qua = mysqli_query($ket_noi,$truy_van);
        $thanh_vien_dau = mysqli_fetch_array($ket_qua);
    ?>
    <form action="./process_update.php" name="myFrom" method="post">
        <input type="hidden" name="ma" id="" value="<?php echo $ma; ?>">
        Họ và tên
        <input type="text" name="name" value="<?php echo $thanh_vien_dau['name']; ?>">
        <br>
        Ngày sinh
        <input type="date" name="bthday" value="<?php echo $thanh_vien_dau['bthday']; ?>">
        <br>
        
        Giới tính
        <br>
        Nam
        <input type="radio" value="1" name="gender" <?php 
            if($thanh_vien_dau['gender'] == 1){
                echo "checked";        
            }
        ?>>
        <br>
        Nữ
        <input type="radio" value="0" name="gender" <?php 
            if($thanh_vien_dau['gender'] == 0){
                echo "checked";        
            }
        ?>>
        <br>
        Email
        <input type="email" name="email" value="<?php echo $thanh_vien_dau['email']; ?>">
        <br>
        <textarea name="desc_txt" id="" cols="30" rows="10"><?php echo $thanh_vien_dau['desc_txt']; ?></textarea>
        <br>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>