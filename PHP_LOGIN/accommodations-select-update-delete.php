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

        $query="select * from accommodations";


        $stmt=$connection->prepare($query);
        $stmt->execute();

        $accommodations=$stmt->fetchAll();


    ?>
    <h1>Thông tin tài khoản</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tên nhà trọ</th>
                <th>Địa chỉ</th>
                <th>Miêu tả</th>
                <th>Giá tiền</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($accommodations as $u): ?>
                <tr>
                    <td><?php echo $u['name'] ?></td>
                    <td><?php echo $u['address'] ?></td>
                    <td><?php echo $u['description'] ?></td>
                    <td><?php echo $u['price'] ?></td>
                    <td><a href="accommodations-update-data.php?accommodation_id=<?php echo $u['accommodation_id'] ?>">Sửa</a></td>
                    <td><a href="accommodations-delete-data.php?accommodation_id=<?php echo $u['accommodation_id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
    <h1><a href="accommodations-insert.php">Thêm dữ liệu</a></h1>
</body>
</html>