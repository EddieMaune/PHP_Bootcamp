#!/usr/bin/php
<?PHP
$number;
$oddeven;
echo "Enter a number: ";
$number = trim(fgets(STDIN));
if (is_numeric($number))
{
	if ($number % 2 == 0)
		$oddeven = "even";
	else
		$oddeven = "odd";
	echo "The number ".$number." is ".$oddeven;
}
else
	echo "'".$number."'"." is not a number";
?>
