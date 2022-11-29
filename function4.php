<!-- function arguement by refrence (we use address & in this type of function )-->
<?php
function testing(&$string)
{
    $string .= "and something extra.";
}
$str = "this is a string<br>";
testing($str);
echo $str;

?>