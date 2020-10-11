<html>
<body>
<?php
$u=$_POST['email'];
$p=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="vss";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
$sql="INSERT into  login values('$u','$p')";
$result=mysqli_query($conn,$sql);
if($result>0)
{
	echo "<h5 style='position:absolute ;bottom: 86% ;right: 36%;width: 300px;'><font color='red'><b>you can now login to our page<b></font></h5>";
	include "login.html";


}

?>
</body>
</html>