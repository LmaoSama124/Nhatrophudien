<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
</head>
<body>

<h2>Đăng ký</h2>

<?php
// Hiển thị thông báo nhập sai nếu có
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>".$_GET['error']."</p>";
}
?>
<form action="register_process.php" method="post">
    Email: <input type="email" name="email"><br>
    Mật khẩu: <input type="password" name="password"><br>
    <input type="submit" value="Đăng ký">
</form>

</body>
</html>
