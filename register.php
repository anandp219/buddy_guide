<?php
session_start();
if(isset($_SESSION['valid_user'])||isset($_COOKIE["user"]))
{
header('Location: index.php');
}
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['email']))
{
require('header.inc');
$name=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
if(($name=="")||($password=="")||($email==""))
{
require('registerform.inc');
require('footer.inc');
exit;
}
//echo $name.$password.$email;
$db=mysqli_connect('localhost','root','','user');
if(mysqli_connect_errno())
{
	echo "Could not connect to the database"."<br/>";
	exit;
}
$query="INSERT INTO user (serial,emailid,username,password) VALUES (NULL,'$email','$name',sha1('$password'))";
if (!mysqli_query($db,$query))
{
  require('notregister.inc');
}
else
{
	require('register.inc');
}
require('footer.inc');
$db->close();
}
else
{
require('header.inc');
require('registerform.inc');
require('footer.inc');

}

?>