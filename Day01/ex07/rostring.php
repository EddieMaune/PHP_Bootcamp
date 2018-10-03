#!/usr/bin/php
<?PHP
if ($argc > 1)
{
    $count = 1;
    $argv[1] = trim($argv[1]);
    $str = $argv[1];
    $word_count = str_word_count($str);
    $count2 = $word_count;
    $str = explode(" ", $str);
    while ($word_count >= 0)
    {
        $str2 =  $str2.$str[$count].' ';
        if ($word_count == 0)
            break;
        $word_count--;
        $count++;
    }
    $str2 = trim($str2);
    print($str2);
    if ($count2 > 2)
        print(' ');
    print($str[0]);
    print("\n");   
}
?>