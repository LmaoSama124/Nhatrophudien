<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // nhập email và mật khẩu
    // kiểm tra email và password
    $users = file('users.txt');
    $found = false;
    foreach ($users as $user) {
        list($stored_email, $stored_password) = explode(',', trim($user));
        if ($email === $stored_email && $password === $stored_password) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Đăng nhập thành công!";
    } else {
        $error = "Email hoặc mật khẩu không đúng!";
        header("Location: login.php?error=" . urlencode($error));
        // chuyển hướng sang register.php để truyền thông tin bị lỗi cho file đó và đảm bảo các kí tự ko bị lỗi (urlencode)
        exit;
    }
}
?>
