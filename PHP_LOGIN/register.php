<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>

<h2>Đăng ký</h2>

<?php

if (isset($_GET['error'])) {
    echo "<p style='color: red;'>".$_GET['error']."</p>";
}
?>
<form action="register_process.php" method="POST">
    Tên: <input type="text" name="username" placeholder="Nhập username"> <br>
    Email: <input type="email" name="email" placeholder="Nhập email"><br>
    Mật khẩu: <input type="password" name="password" placeholder="Nhập password"><br>
    <input type="submit" value="Đăng ký">
</form>

</body>
</html>
