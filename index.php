<?php
session_start();
if(isset($_POST['submit'])&&($_POST['submit']=="Register"))
{
	require('header.inc');
	require('registerform.inc');
	require('footer.inc');
}
else
{
	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		
		$name=$_POST['username'];
		$pass=$_POST['password'];
		$db=mysqli_connect('localhost','root','','user');
		if(mysqli_connect_errno())
		{
			echo "Could not connect to the database"."<br/>";
			exit;
		}
		$query="select username from user where username='$name' and password=sha1('$pass')";
		$result=$db->query($query);
		$num=$result->num_rows;
		
		if($num==0)
		{
		require('header.inc');
		require('wrongform.inc');
		require('footer.inc');
		}
		else
		{
			$query="select city from user where username='$name'";
			$result=$db->query($query);
			$city=mysqli_fetch_assoc($result);
			$city=$city['city'];
			$_SESSION['valid_user']=$name;
			setcookie("city","$city",time()+3600);
			setcookie("user","$name",time()+3600);
			header('Location:home.php');
		}
		
		$db->close();
	}
	else if(!isset($_SESSION['valid_user']))
	{
		if(isset($_COOKIE["user"]))
		{
				$_SESSION['valid_user']=$_COOKIE["user"];
					header('Location:home.php');
		}
		else
		require('i.inc');
	}
	else
	{
			header('Location:home.php');
	}
}
?>