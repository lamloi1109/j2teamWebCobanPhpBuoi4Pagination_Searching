<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./process_insert.php" name="myFrom" method="post">
        Họ và tên
        <input type="text" name="name">
        <br>
        Ngày sinh
        <input type="date" name="bthday">
        <br>
        Giới tính
        <br>
        Nam
        <input type="radio" value="1" name="gender">
        <br>
        Nữ
        <input type="radio" value="0" name="gender">
        <br>
        Email
        <input type="email" name="email">
        <br>
        <textarea name="desc_txt" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>