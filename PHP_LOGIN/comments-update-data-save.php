<?php
    $content=$_POST['content'];
    $date_posted=$_POST['date_posted'];
    $comment_id=$_POST['comment_id'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="update comments set content='$content',date_posted='$date_posted'where comment_id=$comment_id";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
?>