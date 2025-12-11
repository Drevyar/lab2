<?php
$x = 100;
$y = 50;

echo "ค่า x = $x<br>";
echo "ค่า y = $y<br><br>";

// AND
echo "If x == 100 AND y == 50 will display Good morning teacher<br>";
if ($x == 100 && $y == 50) {
    echo "AND: Good morning teacher<br><br>";
}

// OR
echo "If x == 100 OR y == 100 will display Good morning teacher<br>";
if ($x == 100 || $y == 100) {
    echo "OR: Good morning teacher<br><br>";
}

// NOT
echo "If x is NOT equal to 200 will display Good morning teacher<br>";
if (!($x == 200)) {
    echo "NOT: Good morning teacher<br><br>";
}

// XOR
echo "If ONLY ONE of x == 100 OR y == 100 is true will display Good morning teacher<br>";
if (($x == 100) xor ($y == 100)) {
    echo "XOR: Good morning teacher<br><br>";
}
?>
