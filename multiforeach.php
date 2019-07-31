<?php
$names = array('1st'=>array('name'=>'alpha',
							'branch'=>'cse'),
				'2nd'=>array('name'=>'beta',
							'branch'=>'mech'),
				'3rd'=>array('name'=>'charie',
							'branch'=>'cst'),
				'4th'=>array('name'=>'delta',
							'branch'=>'ep'),
				'5th'=>array('name'=>'echo',
							'branch'=>'ECE'));
foreach($names as $keys=>$students)
{
		echo "<b>$keys</b>"."<br>";
		foreach($students as $student=>$items)
		{
			echo "<b>$student</b>"."	"."$items"."<br>";
		}
}
?>