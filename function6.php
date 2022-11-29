<!-- Recursive function (same thing we can do by using loop) -->
<?php
function display($number)
{
    if ($number <= 5) {
        echo "$number<br>";
        display($number + 1);
    }
}
display(1);
?>