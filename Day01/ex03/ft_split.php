#!/usr/bin/php
<?php
function ft_split($str)
{
    $new_str = array_filter(explode(" ", $str));
    // $new_str = array_filter(preg_replace('/[\t|\s{2,}]/', ' ', $str));
    sort($new_str);
    // trim($new_str);
    
    return ($new_str);
}
?>
