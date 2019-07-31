<?php
$nam = $_GET["name"];
$rol = $_GET["roll"];
if(isset($_GET["name"]) && isset($_GET["roll"]))
{
	if(!empty($nam) && !empty($rol))
	{
		echo "<b>Name :</b>".$_GET["name"]."<br>" ;
		echo "<b>Roll :</b>".$_GET["roll"]."<br>" ;
	}
	else
	{
		echo "Please enter all the details" ;
	}
}
else
{
	echo "Please Enter All your details properly" ;
}	
?>