#!/usr/bin/php
<?PHP
while (1)
{
$number;
$oddeven;
echo "Enter a number: ";
$number = trim(fgets(STDIN));
if(feof(STDIN))
        exit("^D"."\n");
if (is_numeric($number))
{
	if ($number % 2 == 0)
		$oddeven = "even";
	else
		$oddeven = "odd";
	echo "The number ".$number." is ".$oddeven."\n";
}
else
    echo "'".$number."'"." is not a number"."\n";
}
?>
