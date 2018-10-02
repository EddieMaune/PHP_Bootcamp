#!/usr/bin/php
<?PHP
    unset($argv[0]);
    $new_array = join(" ",$argv);
    trim($new_array);
    while(strpos($new_array, "  ") == TRUE)
        $new_array = str_replace("  ", " ", $new_array);
    $new_array = explode(" ", $new_array);
    sort($new_array);
    $x = 0;
    while($x < count($new_array))
    {
        echo $new_array[$x]."\n";
        $x++;
    }
?>