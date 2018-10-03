#!/usr/bin/php
<?php
function ft_split($str)
{
    $new_str = array_filter(explode(" ", $str));
    sort($new_str);
    return ($new_str);
}
?>
