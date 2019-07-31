<?php
$students = array('alpha','beta','charlie','delta','echo');
foreach($students as $student)
{
	echo "$student"."<br>" ;
}
$names = array('1st'=>'alpha','2nd'=>'beta','3rd'=>'charlie');
foreach($names as $keys=>$attributes)
{
	echo "$keys"."$attributes"."<br>";
}
?>