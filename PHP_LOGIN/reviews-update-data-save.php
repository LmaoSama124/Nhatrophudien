<?php
    $content=$_POST['content'];
    $rating=$_POST['rating'];
    $date_posted=$_POST['date_posted'];
    $review_id=$_POST['review_id'];

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    $query="update reviews set content='$content',rating='$rating',date_posted='$date_posted' where review_id=$review_id";

    $stmt=$connection->prepare($query);
    $stmt->execute();

    header('location:select.php');
?>