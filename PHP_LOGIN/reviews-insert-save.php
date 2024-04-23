<?php 

    $content=$_POST['content'];
    $rating=$_POST['rating'];
    $description=$_POST['date_posted'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="insert into reviews(content,rating,date_posted) value('$content','$rating','$date_posted')";


    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
?>