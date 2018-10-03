#!/usr/bin/php
<?PHP
    if($argc == 4)
    {
        unset($argv[0]);
        $argv[1] = trim($argv[1]);
        $argv[2] = trim($argv[2]);
        $argv[3] = trim($argv[3]);
        while (strpos($argv[1], "  ") == TRUE)
            $argv[1] = str_replace("  ", " ", $argv[1]);
        while (strpos($argv[2], "  ") == TRUE)
            $argv[2] = str_replace("  ", " ", $argv[2]);
        while (strpos($argv[3], "  ") == TRUE)
            $argv[3] = str_replace("  ", " ", $argv[3]);
        if(!is_numeric($argv[1]) || !is_numeric($argv[3]))
        {
            echo "Syntax Error\n";
        }
        else if(($argv[2] != "+") && ($argv[2] != "*") && ($argv[2] != "/") && ($argv[2] != "-") && ($argv[2] != "%"))
        {
            echo "Syntax Error\n";
        }
        else
        {
            if($argv[2] == "+")
            {
                $result = $argv[1] + $argv[3];
                echo $result."\n"; 
            }
            if($argv[2] == "-")
            {
                $result = $argv[1] - $argv[3];
                echo $result."\n";
            }
            if($argv[2] == "*")
            {
                $result = $argv[1] * $argv[3];
                echo $result."\n";
            }
            if($argv[2] == "%")
            {
                $result = $argv[1] % $argv[3];
                echo $result."\n";
            }
            if($argv[2] == "/")
            {
                $result = $argv[1] / $argv[3];
                echo $result."\n";
            }
        }
    }
    else
        echo "Incorrect Parameters\n";
?>