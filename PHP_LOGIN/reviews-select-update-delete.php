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

        $query="select * from reviews";


        $stmt=$connection->prepare($query);
        $stmt->execute();
        $reviews=$stmt->fetchAll();

    ?>
    <h1>Thông tin tài khoản</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Xếp hạng</th>
                <th>Ngày đăng</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($reviews as $u): ?>
                <tr>
                    <td><?php echo $u['content'] ?></td>
                    <td><?php echo $u['rating'] ?></td>
                    <td><?php echo $u['date_posted'] ?></td>
                    <td><a href="reviews-update-data.php?review_id=<?php echo $u['review_id'] ?>">Sửa</a></td>
                    <td><a href="reviews-delete-data.php?review_id=<?php echo $u['review_id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="reviews-insert.php">Thêm dữ liệu</a></h1>
</body>
</html>