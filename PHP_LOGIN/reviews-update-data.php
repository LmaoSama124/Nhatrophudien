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
        $review_id=$_GET['review_id'];
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

        $query="select * from reviews where review_id=$review_id";

        $stmt=$connection->prepare($query);
        $stmt->execute();

        $reviews=$stmt->fetch();
    ?>
    <form action="reviews-update-data-save.php" method="POST">
        <input type="text" name="review_id" value="<?php echo $reviews['review_id'] ?>" hidden>
        <input type="text" name="content" value="<?php echo $reviews['content'] ?>"><br>
        <input type="text" name="rating" value="<?php echo $reviews['rating'] ?>"><br>
        <input type="text" name="date_posted" value="<?php echo $reviews['date_posted'] ?>"><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>