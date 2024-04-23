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

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

        $query="select * from users";


        $stmt=$connection->prepare($query);
        $stmt->execute();

        $users=$stmt->fetchAll();

    ?>
    <h1>Thông tin tài khoản</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($users as $u): ?>
                <tr>
                    <td><?php echo $u['username'] ?></td>
                    <td><?php echo $u['password'] ?></td>
                    <td><?php echo $u['email'] ?></td>
                    <td><a href="users-update-data.php?user_id=<?php echo $u['user_id'] ?>">Sửa</a></td>
                    <td><a href="users-delete-data.php?user_id=<?php echo $u['user_id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="users-insert.php">Thêm dữ liệu</a></h1>
</body>
</html>