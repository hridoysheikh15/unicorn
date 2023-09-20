<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ussbd";

$conn = mysqli_connect($host, $user, $dbpass, $dbname);

$name = $_POST["name"];
$num = $_POST["num"];
$email = $_POST["email"];
$massage = $_POST["massage"];

$insert = "insert into report(name, num, email, massage) values('$name', '$num', '$email', '$massage')";

$run = mysqli_query($conn, $insert);

if ($run == true) {
    header("location:./success.php?action=true");
} else {
    header("location:./faild.php?action=true");
}


?>