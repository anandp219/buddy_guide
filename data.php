<?php
session_start();
$_SESSION['data_set']=1;
$city=$_GET['city'];
$r1=$_GET['r1'];
$r2=$_GET['r2'];
$r3=$_GET['r3'];
$rest=$r2=$_GET['rest'];
$mov=$r2=$_GET['mov'];
$plc=$r2=$_GET['plc'];
if($city!="")
{
	$db=mysqli_connect('localhost','root','','user');
		if(mysqli_connect_errno())
		{
			echo "Could not connect to the database"."<br/>";
			exit;
		}
	if(($r1!="")&&($rest!=""))
	{
		$query="INSERT INTO food (name,city,rating) VALUES ('$rest','$city','$r1')";
		if (!mysqli_query($db,$query))
		{
		  $_SESSION['data_set']=3;
		}
	}
	if(($r2!="")&&($mov!=""))
	{
		$query="INSERT INTO food (name,city,rating) VALUES ('$mov','$city','$r2')";
		if (!mysqli_query($db,$query))
		{
		  $_SESSION['data_set']=4;
		}
	}
	if(($r3!="")&&($plc!=""))
	{
		$query="INSERT INTO food (name,city,rating) VALUES ('$plc','$city','$r3')";
		if (!mysqli_query($db,$query))
		{
		  $_SESSION['data_set']=5;
		}
	}
}
else
$_SESSION['data_set']=2;
header('Location:index.php');
?>