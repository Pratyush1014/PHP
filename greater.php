<?php
$number1 = 100;
$number2 = 223;
$number3 = 195;
if($number1>$number2)
{
	if($number1>$number3)
	{
		echo "number1 is greater and i.e".$number1;
	}
	else
	{
		echo "number 3 is greater i.e".$number3;
	}
}
else
{
	if($number2>$number3)
	{
		echo "Number2 is greater".$number2;
	}
	else
	{
		echo "Number3 is greater".$number3;
	}
}
?>