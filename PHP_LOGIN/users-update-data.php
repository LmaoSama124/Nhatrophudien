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

        $user_id=$_GET['user_id'];
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

        $query="select * from users where user_id=$user_id";


        $stmt=$connection->prepare($query);
        $stmt->execute();


        $users=$stmt->fetch();
    ?>
    <form action="users-update-data-save.php" method="POST">
        <input type="text" name="user_id" value="<?php echo $users['user_id'] ?>" hidden>
        <input type="text" name="username" value="<?php echo $users['username'] ?>"><br>
        <input type="text" name="password" value="<?php echo $users['password'] ?>"><br>
        <input type="text" name="email" value="<?php echo $users['email'] ?>"><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>