<?php
    $accommodation_id=$_GET['accommodation_id'];

    $connection = new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");
    $query="delete from accommodations where accommodation_id=$accommodation_id";

    $stmt=$connection->prepare($query);
    $stmt->execute();

    header('location:accommodations-select-update-delete.php');
?>