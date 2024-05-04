<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo($username);

    $connection =new PDO("mysql:host=localhost;dbname=demonhatro;charset=utf8","root","");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ!";
        header("Location: register.php?error=" . urlencode($error)); 
   
        exit;
    }

    $query="insert into users(username,password,email) value('$username','$password','$email')";

    $stmt=$connection->prepare($query);
    $stmt->execute();


    header('location:select.php');
}
?>
