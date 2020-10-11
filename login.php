<html>
<body>
<?php
$u=$_POST['email'];
$p=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="vss";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed:".mysqli_connect_error());
}
$sql=$conn("SELECT * from login where email='$u' and password='$p'");
$sql->bind_param('s',$u);
$sql->bind_param('s',$p);
$sql->execute();
$check=mysqli_fetch_array($sql);
$result=$sql->get_result();
if(isSet($check))
{
include "mainPage.html";

}
else
{
echo "<h5 style='  position: fixed;bottom: 86% ;right: 32%;width: 300px;'><font color='red'><b>Login failed<b></font></h5>";
include 'login.html';

}
?>
</body>
</html>