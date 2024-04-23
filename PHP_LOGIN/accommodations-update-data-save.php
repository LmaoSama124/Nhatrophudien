<?php
    $name=$_POST['name'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $accommodation_id=$_POST['accommodation_id'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="update accommodations set name='$name',address='$address',description='$description',price='$price' where accommodation_id=$accommodation_id";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
?>