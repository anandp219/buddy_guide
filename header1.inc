<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Buddy Guide
    </title>
    
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAADm+/8ADgL/APHy9gAAAwAA6vj/AOv4/wDt+fkABAAAAAAGAAAABAMA9PbwAAUAAAABAAkABQMAAAAMAAAGCQAAAAAbAAUIBgAYBf8ACQYAAAgJAACprP8A9Pv/AAoJAAD4+P8A//3qAPr/+QD///kAsLL/AAAE/QBRTvcAgI31AH+N/gAAAAEAFhLWAAAACgB1b/8AMibkAC8d/wAREfcACwABAHd/8AB+bP8AEAABAIRy/wAFBOMAq773AAAA+wAPBhMAAAX4ADY38wAiEP0A4P/yAIWB/wAQAPsA1tP/AAMAAgAAAAsAkY3/ANfr9gAZCfsA4uL/AP//8gD///sACAjeAAAA/AASABQAAQD8AOPu/wAFAf8AnJ//AAQE/wCaov8ABgT/AAwD8wDo9P8A6//qABMG6gDp9/8AAAIAAA8J/AD08f8AEgf/AAAAFQAECAAAGhLhAAUADAAWFuQAGAH/AIGo9wAVB/8ABwgAAPH//AD29/8ADAADAAgIAAAFDgAA+ff/AGlh6gD4//wAEgADAPr9/wBMSvcA//f/AP//8wAAAPQAFwADABAAFQD//f8ADRIDAAQA9ACtuv8Atq7/ALK0/wAWCwAAubT/AAkK7gAJAP0A4//9AD5M7AALAAQAAwIcAPv4+gD//+sAe3z8AP//9AB5g/8Ag3f/AAED9QB+i/MAAgD+AFZP7AADAP4AtMblAIl6/wA0Pf8AEAD+AA4N7wDs/PUAEgD+AM7n/wA/QP8ADhD4AAAJBQBGSOoARjr/AAAAFwD9/+wADgAOAAAA7QANBwgA3er/APr//gAHAuEAAAjqAJWb/wDg7f8A4ur/AP///gABBPkAIR3yAOvq/wDz4f8A6vD/ABEB+QDx7f8ADgX8ABAM7QARAP8AEwH5AAAHAABUXv8AcXz1APD5/wAeA+0A7f//AO///wDx/P8ADAEAAPb2/wALBAAA8f//APT8/wATD/8Aobn/AAAA5QD4+f8AGwb/APn5/wAOG/8AEgcAAAAA9wBNSP0AFQoAALK2/wAQGQAAtbb/AAUF/QC1vP8ACQT6AAwL6wCgpfoAKSnhAPD/7gARDvQA8/3xAAQDBwD3+vEAAAAZAAAA7wBSRfUAgHv8AAAA+AABAPgAa2j6AIOC/wA8M/8A7PjsAC0o3wAQDfIAKQETAAAKAgAACw4AFRjvAAgHCwAaH+AA+v37AAMJ3gD///gAAATzAAAA+QDa9f8AAQL2AAIK6gCuwPsAFAkRAOXv/wAGAfwACQD5AOP4/wDv6f8AEAfqAEA79AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIWARIQgPOBdrwb6yW9DeDtwZ8F1horytdgA7sLbNpeAD5+G52xInv0CIJmY6r31yzpyQji/U0bdVTW4B8dahlA0+USxax4OKPUQp7sWoRhCS4ns1HZWRGOQC7zZphIGq3Wh6homawKPLsYw8Md/JVlMbFtctSaAffCQldZ+rtWq0zwUg40dFyOlDzDMcXJMrFJ6Y06bU2HFwm8pKqUizEyNnfX9S1NJlZwa45UEyl1RPY69+gOge7Gw0Wb1pIgSWDE6sh4Ivp43yd9Xmi2K6KAdL2pmkWFd07VC7rio3P3jD2XPEwhXqby7GhZ1MGgowI+teC0+PCF9kQgttOQl5DgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style2.css" />
	
	<style>
	
	</style>


<script>
function karma(str)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  vars="data="+str;
  
  xmlhttp.open("POST","info.php",true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send(vars);
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("contents").innerHTML=xmlhttp.responseText;
	}
  }

}

</script>
	</head>
<body>
<div id="main">
<div id="head">
<div id="logo">
<a href="index.php"><img src="logo.png" alt="logo" width="100%" height="100%" position="relative"></a>
</div>

<a href="#" id="item" onclick="karma('food')" ><p>Food & Resturant</p></a>
<a href="#" id="item1" onclick="karma('movie')" ><p>Movies & Theaters</p></a>
<a href="#" id="item2" onclick="karma('places')" ><p>Places to Visit</p></a>
<a href="#" id="item3" onclick="karma('entry')" ><p>Put an Entry</p></a>
<div id="but">
	<form  action="logout.php" method="post" >
		<div class="footer">
		<input type="submit" name="submit" value="LogOut" id="button" position="relative" />
		</div>
	</form>
</div>
</div>
<div id="gallery">//THIS IS FOR GALLERY
</div>
<div id="contents">
ssjdh
</div>
	<script>
	var varname = '<?php echo $_SESSION["data_set"]; ?>';
	if(varname=="1")
	{
		document.getElementById("contents").innerHTML="Data for Resturant Saved";
		
	}
	else if(varname=="2")
	{
	document.getElementById("contents").innerHTML="No Data Saved as no city given";
	}
	else if(varname=="3")
	{
	document.getElementById("contents").innerHTML="Data For Resturant not saved";
	}
	else if(varname=="4")
	{
	document.getElementById("contents").innerHTML="Data for Resturant and Movie not saved";
	}
	else
	{
	document.getElementById("contents").innerHTML="Data for all 3 not Saved";
	}
	</script>
<div id="foot">
<div id="text1">
<p class="t">Copyright &#169; Buddy Guide</p>
<p  class="t1">Owned and operated by <a target="blank" href="http://fb.com/anand.pandey.338">Anand Pandey</a></p>
</div>
</div>
</div>