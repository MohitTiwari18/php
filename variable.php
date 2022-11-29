<!-- Global and local variable -->
<?php
$x = 10;
function test()
{
    global $x;


    echo "variable x inside function: $x";
    echo "<br>";
}
test();
echo "variable x outside function: $x";
?>