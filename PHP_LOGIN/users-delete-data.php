<?php 

    $user_id=$_GET['user_id'];

    $connection = new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="delete from users where user_id=$user_id";


    $stmt=$connection->prepare($query);
    $stmt->execute();

    header('location:users-select-update-delete.php');
?>