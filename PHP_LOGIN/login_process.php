<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kết nối đến cơ sở dữ liệu MySQL sử dụng PDO
    $host = 'localhost';
    $db_name = 'demonhatro';
    $username = 'root';
    $password_db = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Chuẩn bị truy vấn SQL để lấy thông tin người dùng dựa trên email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(array(':email' => $email));
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Duyệt qua từng người dùng và kiểm tra thông tin đăng nhập
        $found = false;
        foreach ($users as $user) {
            // Kiểm tra mật khẩu bằng cách sử dụng hàm password_verify
            if ($password=== $user['password']) {
                $found = true;
                break;
            }
        }

        if ($found) {
            // Đăng nhập thành công
            echo "Đăng nhập thành công!";
        } else {
            // Đăng nhập thất bại
            $error = "Email hoặc mật khẩu không đúng!";
            header("Location: login.php?error=" . urlencode($error));
            exit;
        }
    } catch(PDOException $e) {
        // Xử lý nếu có lỗi kết nối cơ sở dữ liệu
        echo "Lỗi kết nối: " . $e->getMessage();
    }
}
?>
