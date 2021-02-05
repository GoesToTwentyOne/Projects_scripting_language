<?php
$jhanker = array(
    array(1, "Nihad", 1000000),
    array(2, "angela", 50000),
    array(3, "juliene", 40000000)



);
for ($row = 0; $row <= 2; $row++) {
    for ($col = 0; $col <= 2; $col++) {
        echo $jhanker[$row][$col] . "  ";
    }
    echo "<br/>";
}
