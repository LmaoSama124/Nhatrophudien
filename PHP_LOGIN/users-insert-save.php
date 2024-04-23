<?php 
    // Khai báo các biến chứa dữ liệu được gửi thông qua POST
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="insert into users(username,password,email) value('$username','$password','$email')";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
?>