#!/usr/bin/php
<?PHP
    if($argc > 1)
    {
        unset($argv[0]);
        $new_array = join(" ",$argv);
        trim($new_array);
        while(strpos($new_array, "  ") == TRUE)
            $new_array = str_replace("  ", " ", $new_array);
        $new_array = explode(" ", $new_array);
        $x = 0;
        $n = 0;
        $a = 0;
        $o = 0;
        while($x < count($new_array))
        {
            if(is_numeric($new_array[$x]))
            {
                $nums[$n] = $new_array[$x];
                $n++;
            }
            else if(ctype_alpha ($new_array[$x]))
            {
                $word[$a] = $new_array[$x];
                $a++;
            }
            else
            {
                $other[$o] = $new_array[$x];
                $o++;
            }
            $x++;
        }
        rsort($nums);
        sort($word, SORT_STRING | SORT_FLAG_CASE);
        sort($other);
        $x = 0;
        while($x < count($word))
        {
            echo $word[$x]."\n";
            $x++;
        }
        $x = 0;
        while($x < count($nums))
        {
            echo $nums[$x]."\n";
            $x++;
        }
        $x = 0;
        while($x < count($other))
        {
            echo $other[$x]."\n";
            $x++;
        }
    }
?>