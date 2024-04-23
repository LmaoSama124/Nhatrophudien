<?php 

    $content=$_POST['content'];
    $date_posted=$_POST['date_posted'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="insert into comments(content,date_posted) value('$content','$date_posted')";


    $stmt=$connection->prepare($query);
    $stmt->execute();

    header('location:select.php');
?>