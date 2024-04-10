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
        // Khai báo biến đón id đã truyền đi
        $user_id=$_GET['user_id'];
        $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
        // Câu truy vấn
        $query="select * from users where user_id=$user_id";

        // Thực thi câu truy vấn
        $stmt=$connection->prepare($query);
        $stmt->execute();

        // Khai báo biến để nhận các thông tin lấy được
        $users=$stmt->fetch();
    ?>
    <form action="update-data-save.php" method="POST">
        <input type="text" name="user_id" value="<?php echo $users['user_id'] ?>" hidden>
        <input type="text" name="username" value="<?php echo $users['username'] ?>"><br>
        <input type="text" name="password" value="<?php echo $users['password'] ?>"><br>
        <input type="text" name="email" value="<?php echo $users['email'] ?>"><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>