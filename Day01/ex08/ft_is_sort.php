#!/usr/bin/php
<?PHP
    function ft_is_sort($arr)
    {
        if (!is_array($arr))
            return (0);
        for ($i = 0; $i < count($arr); $i++)
        {
            for ($j = $i + 1; $j < count($arr); $j++)
            {
                if (strcmp($arr[$i], $arr[$j]) > 0)
                    return (0);
            }
        }
        return (1);
    }

    $x = array("f", "2", "3");
    echo ft_is_sort($x);
?>
