<?php 
    // Đón id đã gửi đi
    $user_id=$_GET['user_id'];

    $connection = new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
    // Câu truy vấn xóa dữ liệu
    $query="delete from users where user_id=$user_id";

    // Thực thi truy a
    $stmt=$connection->prepare($query);
    $stmt->execute();

    // Thêm xong thì chuyển về trang hiển thị dữ liệu
    header('location:select-update-delete.php');
?>