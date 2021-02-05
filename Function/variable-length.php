<?php
function unlimited(...$num)
{
    $sum = 0;
    foreach ($num as $n) {
        $sum = $sum + $n;
    }
    echo $sum;
}
unlimited(1, 3, 5, 4);
