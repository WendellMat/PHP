<?php

$num = 0;
while ($num <= 100) {
    if ($num % 2 != 0) {
        echo $num . PHP_EOL;
    }
    $num += 1;
}