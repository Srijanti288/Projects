<?php

$dbcon = mysqli_connect('localhost','root');

if($dbcon)
{
    echo "Connection Succesful";
}
else
{
    echo "No Connection";
}

mysqli_select_db($dbcon, 'projectphp');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$query = "insert into contactdetails (Name, Email, Mobile, Message) values ('$name', '$email', '$mobile', '$message')";

mysqli_query($dbcon, $query);

header('location:index.php');
?>