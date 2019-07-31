<?php
function palindrome($n)
{
	$number = $n;  
	$sum = 0;  
	while(floor($number)) 
	{  
		$rem = $number % 10;  
		$sum = $sum * 10 + $rem;  
		$number = $number/10;  
	} 
	if ($sum == $n)
	{
		return 1 ;
	}
	else 
	{
		return 0 ;
	}
}
function prime($n)
{
	$counter = 0 ;
	for ($i =1 ;$i<=$n;$i++)
	{
		if ($n % $i == 0)
		{
			$counter++;
		}
	}
	if ($counter == 2)
	{
		return 1 ;
	}
	else 
	{
		return 0 ;
	}
}
$n = $_GET["num"] ;
if (palindrome($n))
{
	echo "This number is a palindrome number"."<br>" ;
}
if (prime($n))
{
	echo "This is a prime number"."<br>" ;
}
?>