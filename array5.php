<!-- Multidimensional array or nested array another example -->
<?php
$emp = [
    [1, "krishna", "manager", 50000],
    [2, "salman", "salesman", 20000],
    [3, "mohan", "computer software", 12000],
    [4, "ramesh", "driver", 5000]

];
echo "<center><table border='2px' callpad='5px' cellspacing='0'>";
echo "<tr>
<th>Emp id.</th>
<th>Emp name.</th>
<th>Designation</th>
<th>Salary</th>
</tr>";
foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td>$v2 . </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>