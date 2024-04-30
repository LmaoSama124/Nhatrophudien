<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $host = 'localhost';
    $db_name = 'demonhatro';
    $username = 'root';
    $password_db = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password_db);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(array(':email' => $email));
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $found = false;
        foreach ($users as $user) {

            if ($password=== $user['password']) {
                $found = true;
                break;
            }
        }

        if ($found) {

            echo "Đăng nhập thành công!";
        } else {

            $error = "Email hoặc mật khẩu không đúng!";
            header("Location: login.php?error=" . urlencode($error));
            exit;
        }
    } catch(PDOException $e) {

        echo "Lỗi kết nối: " . $e->getMessage();
    }
}
?>
