<?php
if($_POST["password"] === 'password')
{
	echo $_POST["username"].' welcome to the portal'."<br>" ;
}
else
{
	echo "Sorry you have entered an incorrect password" ;
}
?>