<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'Project');

$name=$_POST['user'];
$pass=$_POST['password'];


$sql="select * from Login where Name='$name' AND Password='$pass'";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num == 1)
{
$_SESSION['username']=$name;
echo ("<script LANGUAGE='JavaScript'>
window.location.href='Project.php';
</script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
window.alert('Invalid Username or Password');
window.location.href='LoginT.php';
</script>");
}

?>