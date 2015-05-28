<?php

function getMersenneNumbers($n)
{
    for ($i = 1; $i <= $n; $i++) {
        yield pow(2, $i) - 1;
    }
}

foreach (getMersenneNumbers(10) as $value) {
    echo $value . ' ';
}