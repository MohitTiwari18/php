<!-- Array using loop -->
<?php
$colors = ["red", 39, "yellow", 78];
echo "<ul>";
for ($i = 0; $i <= 4; $i++) {
    echo "<li> $colors[$i] </li>";
}
echo "</ul>";
?>