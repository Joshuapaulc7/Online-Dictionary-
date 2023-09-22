<html>
<head>
<style>
script
{
background:black;
}
</style>
</head>
<body>

<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'Project');

$name=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['password'];


$sql="select * from Login where Name='$name'";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1)
{
echo ("<script LANGUAGE='JavaScript'>
window.alert('This Username is already taken!!');
window.location.href='SignupT.php';
</script>");

}
else
{
$reg="insert into Login(Name,Email,Password) values('$name','$email','$pass')";
mysqli_query($con,$reg);
echo ("<script LANGUAGE='JavaScript'>
window.alert('Successfully Registered!');
window.location.href='LoginT.php';
</script>");

}

?>

</body>
</html>
