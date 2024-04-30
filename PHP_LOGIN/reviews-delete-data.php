<?php 

    $review_id=$_GET['review_id'];

    $connection = new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="delete from reviews where review_id=$review_id";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:reviews-select-update-delete.php');