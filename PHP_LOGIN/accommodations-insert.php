<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm dữ liệu</title>
</head>
<body>
    <h1>Thêm trọ</h1>
    <form action="accommodations-insert-save.php" method="POST">
        <input type="text" name="name" placeholder="Nhập tên trọ"> <br>
        <input type="text" name="address" placeholder="Nhập địa chỉ"> <br>
        <input type="text" name="description" placeholder="Nhập miêu tả"> <br>
        <input type="text" name="price" placeholder="Nhập giá thành"> <br>
        <input type="submit" value="Thêm mới">
    </form>

</body>
</html>