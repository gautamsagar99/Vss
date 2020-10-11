<?php

$servername="localhost";
$username="root";
$password="";
$dbname="vss";

$conn=mysqli_connect($servername,$username,$password,$dbname);


$v_name=$_POST['Name'];
$v_phno=$_POST['Email'];
$v_email=$_POST['PhoneNumber'];
$v_message=$_POST['Message'];
   
$sql="INSERT INTO message VALUES('$v_name','$v_phno','$v_email','$v_message')";

if(mysqli_query($conn,$sql))
{
include 'dad1.html';
}
else
{
echo "Error:".$sql."<br>".mysqli_connect_error($conn);
}
mysqli_close($conn);
?>

