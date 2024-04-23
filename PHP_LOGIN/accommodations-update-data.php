<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
</head>
<body>
    <?php 

        $accommodation_id=$_GET['accommodation_id'];
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

        $query="select * from accommodations where accommodation_id=$accommodation_id";


        $stmt=$connection->prepare($query);
        $stmt->execute();


        $accommodations=$stmt->fetch();
    ?>
    <form action="accommodations-update-data-save.php" method="POST">
        <input type="text" name="accommodation_id" value="<?php echo $accommodations['accommodation_id'] ?>" hidden>
        <input type="text" name="name" value="<?php echo $accommodations['name'] ?>"><br>
        <input type="text" name="address" value="<?php echo $accommodations['address'] ?>"><br>
        <input type="text" name="description" value="<?php echo $accommodations['description'] ?>"><br>
        <input type="text" name="price" value="<?php echo $accommodations['price'] ?>"><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>