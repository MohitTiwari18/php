<?php
function sum($sst, $math, $eng)
{
    $s = $sst + $math + $eng;
    return $s;
}
function percentage($st)
{
    $per = $st / 3;
    echo $per . "%";
    echo "<br>";
}
$total = sum(45, 65, 35);
percentage($total);
echo $total;
