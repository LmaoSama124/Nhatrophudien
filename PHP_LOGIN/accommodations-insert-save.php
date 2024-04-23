<?php 

    $name=$_POST['name'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="insert into accommodations(name,address,description,price) value('$name','$address','$description','$price')";

    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
?>