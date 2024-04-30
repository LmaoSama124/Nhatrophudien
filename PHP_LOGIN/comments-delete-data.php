<?php 

    $comment_id=$_GET['comment_id'];

    $connection = new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="delete from comments where comment_id=$comment_id";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:comments-select-update-delete.php');
?>