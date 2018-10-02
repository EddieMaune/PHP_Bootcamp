#!/usr/bin/php
<?PHP
    
    if ($argv[1])
    {
        $x = trim($argv[1]);
        while (strpos($x, "  ") == TRUE)
        {
            $x = str_replace("  ", " ", $x);
        }
        echo $x;
    }
?>