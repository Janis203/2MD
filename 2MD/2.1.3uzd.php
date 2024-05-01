<?php
//7.uzd
$a = -9.81;
$t = 10;
$vi = 0;
$xi = 0;
$xt = 0.5 * $a * ($t ** 2) + ($vi * $t) + $xi;
echo $xt . "m";