<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập</h2>

<?php
// Hiển thị thông báo nếu bị lỗi đăng nhập
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>".$_GET['error']."</p>";
}
?>

<form action="login_process.php" method="post">
    Email: <input type="email" name="email"><br>
    Mật khẩu: <input type="password" name="password"><br>
    <input type="submit" value="Đăng nhập">
</form>

</body>
</html>
