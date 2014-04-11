<?php
session_start();
$name=$_SESSION['valid_user'];
$db=mysqli_connect('localhost','root','','user');
if(mysqli_connect_errno())
{
	echo "Could not connect to the database"."<br/>";
	exit;
}
$query="select city from user where username='$name'";
$result=$db->query($query);
$row=mysqli_fetch_array($result);
$city=$row[0];
$data=$_POST["data"];
if($data!="entry")
{
	$query="select * from $data where city='$city'";
	$result=$db->query($query);
	$num=$result->num_rows;
	if($row==0)
	echo "<p>Sorry no result found</p>";
	else
	{
		echo "<table id= 'table' class='table  table-bordered table-responsive' >";
		echo '<br/><tr><label for="name"></label><input type="text" id="name" class="input" placeholder='.strtoupper($city).'></tr>';
		echo "<tr><th class='th'>Serial No.</th><th class='th'>Name</th><th class='th'>City</th><th class='th'>Rating</th>";
		for($i=0,$j=0;$j<$num;$i++,$j++)
		{
			$row=mysqli_fetch_array($result);
			echo "<tr class = 'row".($i%2)."' >"."<td class = 'hoverTd'>".($i+1)."</td><td class = 'hoverTd'>".$row['name']."</td><td class = 'hoverTd'>".$row['city']."</td><td class = 'hoverTd'>".$row['rating']."</td></tr>";
			//echo "<hr color='red'>";
		}
		echo '<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Find About This City"  id="button" style="position:relative;margin-top:-4%;"></tr>';
		echo "<br/>";
		echo "</table>";
	}
}
else
{
	echo "<form name='data-form' method='get' action='data.php'>";
	echo "<table id= 'table' class='table  table-bordered table-responsive' >";
	echo '<br/><tr><label for="name"></label><input type="text" id="name" name="city" class="input" placeholder="CITY"/></tr>';
	echo "<tr><th class='th'>Food</th><th class='th'>Movies</th><th class='th'>Places To Go</th>";
	echo '<tr><td><label for="name"></label><input type="text" id="name" name="rest" class="input" placeholder="Resturant Name"/></td><td><label for="name"></label><input type="text" name="mov" id="name" class="input" placeholder="Theatre or Multiplex"/></td><td><label for="name"></label><input type="text" name="plc" id="name" class="input" placeholder="Places To Go"/></td>';
	echo '<tr><td><label for="name"></label><input type="text" id="name" class="input" name="r1" placeholder="Rating"/></td><td><label for="name"></label><input type="text" name="r2" id="name" class="input" placeholder="Rating"/></td><td><label for="name"></label><input type="text" name="r3" id="name" class="input" placeholder="Rating"/></td>';
	echo '<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Enter Data"  id="button" style="position:relative;margin-top:-4%;"></tr>';
	echo "</form>";
}
?>