<!-- Multidimensional Array or Nested array-->
<?php
$emp = [
    [1, "krishna", "manager", 50000],
    [2, "salman", "salesman", 20000],
    [3, "mohan", "computer software", 12000],
    [4, "ramesh", "driver", 5000]

];
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 4; $col++) {
        echo $emp[$row][$col] . " ";
    }
    echo "<br>";
}

?>