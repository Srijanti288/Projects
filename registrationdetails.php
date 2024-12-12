<?php

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "Connection Succesfull";
}
else
{
    echo "No Connection";
}

mysqli_select_db($con, 'projectphp');

$yourname = $_POST['yourname'];
$yourgender = $_POST['yourgender'];
$youremail = $_POST['youremail'];
$yourphone = $_POST['yourphone'];

$sql = "insert into registrationdetails (Name, Gender, Email_Id, Phone_No) values ('$yourname', '$yourgender', '$youremail', '$yourphone')";

mysqli_query($con, $sql);

header('location:index.php');
?>