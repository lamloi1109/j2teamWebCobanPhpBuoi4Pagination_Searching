<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang Chủ</h1>
    <a href="./form_insert.php">Thêm thành viên</a>
    <?php
        require "./connect_db.php";
        $search = "";
        $trang = 1;
        if(isset($_GET['trang'])){
            $trang = $_GET['trang'];
        }
        if(isset($_GET['search'])){
            $search = $_GET['search'];
        }
        $sql_count_user = "select count(*) from thanhvien
        where name like '%$search%'";
        $arr_count_user = mysqli_query($ket_noi, $sql_count_user);
        $ket_qua_count_user = mysqli_fetch_array($arr_count_user);
        $count_user = $ket_qua_count_user['count(*)'];
        $so_user_tren_1_trang = 2;
        $so_trang = ceil($count_user/$so_user_tren_1_trang);
        $bo_qua = $so_user_tren_1_trang * ($trang - 1);

        $truy_van = "select * from thanhvien
        where name like '%$search%'
        limit $so_user_tren_1_trang offset $bo_qua";
        $ket_qua = mysqli_query($ket_noi,$truy_van);    
    ?>
    <h3>Đanh sách thành viên</h3>
    <form>
        <input type="search" name="search" value="<?php echo $search; ?>">
    </form>
    <table>
        <tr>
            <th>
                Mã
            </th>
            <th>
                Tên thành viên
            </th>
            <th colspan="2">
                Lựa chọn
            </th>
        </tr>
        <?php 
            foreach($ket_qua as $tung_thanh_vien){
        ?>
        <tr>
            <td> <?php echo $tung_thanh_vien['ma']; ?> </td>
            <td> <a href="<?php echo $tung_thanh_vien['ma']  ?>"><?php echo $tung_thanh_vien['name']; ?> </td></a> 
            <td><a href="./update.php?ma=<?php echo $tung_thanh_vien['ma']; ?>">Sửa</a></td>
            <td><a href="./process_delete.php?ma=<?php echo $tung_thanh_vien['ma']; ?>">Xóa</a></td>
        </tr>
        <?php }?>
    </table>
    <?php for($i = 1;$i<= $so_trang ;$i++){
        if( $search != ""){
        ?>
        <a href="?trang=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a>
        <?php } else {?>
        <a href="?trang=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php }?>
    <?php }?>
    <?php  ?>   
</body>
</html>