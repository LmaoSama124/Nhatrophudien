<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
    // kiểm tra nhập email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ!";
        header("Location: register.php?error=" . urlencode($error)); 
        // chuyển hướng sang register.php để truyền thông tin bị lỗi cho file đó và đảm bảo các kí tự ko bị lỗi (urlencode)
        exit;
    }

    $query="insert into users(username,password,email) value('$username','$password','$email')";
    // Thực thi câu truy vấn
    $stmt=$connection->prepare($query);
    $stmt->execute();

    // Lưu thành công thì chuyển về trang hiển thị dữ liệu
    header('location:select.php');
}
?>
