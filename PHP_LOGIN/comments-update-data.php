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

        $comment_id=$_GET['comment_id'];
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

        $query="select * from comments where comment_id=$comment_id";


        $stmt=$connection->prepare($query);
        $stmt->execute();


        $comments=$stmt->fetch();
    ?>
    <form action="comments-update-data-save.php" method="POST">
        <input type="text" name="comment_id" value="<?php echo $comments['comment_id'] ?>" hidden>
        <input type="text" name="content" value="<?php echo $comments['content'] ?>"><br>
        <input type="text" name="date_posted" value="<?php echo $comments['date_posted'] ?>"><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>