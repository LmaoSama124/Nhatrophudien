<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị dữ liệu</title>
</head>
<body>
    <?php 
    // Chuỗi kết nối đến CSDL
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
        // Câu truy vấn
        $query="select * from users";

        // Thực thi câu truy vấn
        $stmt=$connection->prepare($query);
        $stmt->execute();
        // Khai báo biến để nhận dữ liệu được lấy ra
        $users=$stmt->fetchAll();

        // Test thử dữ liệu có lấy được không
        //var_dump($users);
    ?>
    <h1>Thông tin tài khoản</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Lấy dữ liệu nhiều dòng -->
            <?php foreach($users as $u): ?>
                <tr>
                    <td><?php echo $u['username'] ?></td>
                    <td><?php echo $u['password'] ?></td>
                    <td><?php echo $u['email'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="insert.php">Thêm dữ liệu</a></h1>
    <h1><a href="select-update-delete.php">Cập nhật dữ liệu</a></h1>
</body>
</html>