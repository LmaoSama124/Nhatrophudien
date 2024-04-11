<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>
<body>
    <h1>Thêm User</h1>
    <form action="insert-save.php" method="POST">
        <input type="text" name="username" placeholder="Nhập username"> <br>
        <input type="text" name="password" placeholder="Nhập password"> <br>
        <input type="text" name="email" placeholder="Nhập email"> <br>
        <input type="submit" value="Thêm mới">
    </form>
    <!-- 
        POST: Phương thức giúp gửi đi dữ liệu đã nhập vào các input
        Dữ liệu gửi đi này được đón lấy và thực hiện theo hành động trong action, ví dụ insert-save.php
     -->
</body>
</html>