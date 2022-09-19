<?php
$r = (rand(1, 50));
const pi = 3.14;
$A = pi * $r * $r;
$wh = $r * 2;
echo ((" Радиус круга:" . $r) . "Площадь круга:" . $A);
echo "<div style = \"width:{$wh}px;height:{$wh}px;border-radius:50%;background:blue;\"></div>";