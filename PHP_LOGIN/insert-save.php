<?php 
    // Khai báo các biến chứa dữ liệu được gửi thông qua POST
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
    // Câu truy vấn
    $query="insert into users(username,password,email) value('$username','$password','$email')";

    // Thực thi câu truy vấn
    $stmt=$connection->prepare($query);
    $stmt->execute();

    // Lưu thành công thì chuyển về trang hiển thị dữ liệu
    header('location:select.php');
?>