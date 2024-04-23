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
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $u): ?>
                <tr>
                    <td><?php echo $u['username'] ?></td>
                    <td><?php echo $u['password'] ?></td>
                    <td><?php echo $u['email'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="users-insert.php">Thêm dữ liệu</a></h1>
    <h1><a href="users-select-update-delete.php">Cập nhật dữ liệu</a></h1>
    <?php 





        $query="select * from accommodations";


        $stmt=$connection->prepare($query);
        $stmt->execute();

        $accommodations=$stmt->fetchAll();


    ?>
    <h1>Thông tin chỗ ở</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tên nhà trọ</th>
                <th>Địa chỉ</th>
                <th>Miêu tả</th>
                <th>Giá tiền</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($accommodations as $u): ?>
                <tr>
                    <td><?php echo $u['name'] ?></td>
                    <td><?php echo $u['address'] ?></td>
                    <td><?php echo $u['description'] ?></td>
                    <td><?php echo $u['price'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="accommodations-insert.php">Thêm dữ liệu</a></h1>
    <h1><a href="accommodations-select-update-delete.php">Cập nhật dữ liệu</a></h1>
</body>




   <?php 
        $query="select * from reviews";


        $stmt=$connection->prepare($query);
        $stmt->execute();

        $reviews=$stmt->fetchAll();
    ?>

    <h1>Đánh giá</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Xếp hạng</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($reviews as $u): ?>
                <tr>
                    <td><?php echo $u['content'] ?></td>
                    <td><?php echo $u['rating'] ?></td>
                    <td><?php echo $u['date_posted'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="reviews-insert.php">Thêm dữ liệu</a></h1>
    <h1><a href="reviews-select-update-delete.php">Cập nhật dữ liệu</a></h1>
</body>



<?php 

        $query="select * from comments";


        $stmt=$connection->prepare($query);
        $stmt->execute();

        $comments=$stmt->fetchAll();
    ?>

    <h1>Comments</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($comments as $u): ?>
                <tr>
                    <td><?php echo $u['content'] ?></td>
                    <td><?php echo $u['date_posted'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="comments-insert.php">Thêm dữ liệu</a></h1>
    <h1><a href="comments-select-update-delete.php">Cập nhật dữ liệu</a></h1>
</body>
</html>