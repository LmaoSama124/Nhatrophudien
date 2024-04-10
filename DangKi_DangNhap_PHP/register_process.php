<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // kiểm tra nhập email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ!";
        header("Location: register.php?error=" . urlencode($error)); 
        // chuyển hướng sang register.php để truyền thông tin bị lỗi cho file đó và đảm bảo các kí tự ko bị lỗi (urlencode)
        exit;
    }
    // lưu dữ liệu vào file users.txt
    $file = 'users.txt';
    $data = "$email,$password\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Đăng ký thành công!";
}
?>
