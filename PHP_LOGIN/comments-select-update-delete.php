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
        $query="select * from comments";

        // Thực thi câu truy vấn
        $stmt=$connection->prepare($query);
        $stmt->execute();
        // Khai báo biến để nhận dữ liệu được lấy ra
        $comments=$stmt->fetchAll();

        // Test thử dữ liệu có lấy được không
        //var_dump($users);
    ?>
    <h1>Comments</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <!-- Lấy dữ liệu nhiều dòng -->
            <?php foreach($comments as $u): ?>
                <tr>
                    <td><?php echo $u['content'] ?></td>
                    <td><?php echo $u['date_posted'] ?></td>
                    <td><a href="comments-update-data.php?comment_id=<?php echo $u['comment_id'] ?>">Sửa</a></td>
                    <td><a href="comments-delete-data.php?comment_id=<?php echo $u['comment_id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="comments-insert.php">Thêm dữ liệu</a></h1>
</body>
</html>