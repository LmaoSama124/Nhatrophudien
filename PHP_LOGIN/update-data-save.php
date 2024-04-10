<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $user_id=$_POST['user_id'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
    // Câu truy vấn
    $query="update users set username='$username',password='$password',email='$email' where user_id=$user_id";

    // Thực thi câu truy vấn
    $stmt=$connection->prepare($query);
    $stmt->execute();

    // Chuyển về trang hiển thị để kiểm tra đã sửa chưa
    header('location:select.php');
?>