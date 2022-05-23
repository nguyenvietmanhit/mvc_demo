<?php
if (0) {
    echo '0';
} else {
    echo '1';
}

$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;