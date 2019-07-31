<?php
$primary = array('1st'=>array('name'=>'alpha','roll'=>'1'),
					'2nd'=>array('name'=>'beta','roll'=>'2'),
					'3rd'=>array('name'=>'charlie','roll'=>'3'),
					'4th'=>array('name'=>'delta','roll'=>'4'),
					'5th'=>array('name'=>'echo','roll'=>'5'));
foreach($primary as $keys => $innerarray)
{
	echo "<b>$keys</b>"."<br>" ;
	foreach($innerarray as $key => $items)
	{
		echo "<b>$key</b>"."	"."$items"."<br>" ;
	}
}
?>