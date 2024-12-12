<?php

$dbc = mysqli_connect('localhost','root');

if($dbc)
{
    echo "Connection Succesful";
}
else
{
    echo "No Connection";
}

mysqli_select_db($dbc, 'projectphp');

$username = $_POST['username'];
$password = $_POST['pass'];

$sql = "insert into logindetails (User_Name, Password) values ('$username', '$password')";

mysqli_query($dbc, $sql);

header('location:index.php');
?>