<?php
function checkage($age) {
    if ($age >= 20) {
        return "you are adult";
    } elseif ($age >= 18) {
        return "you are teenager";
    } else {
        return "you are child";
    }
}

echo "if age >= 20 display you are adult <br>";
echo "if age >= 18 display you are teenager <br>";
echo "else display child <br>";   // 👈 เพิ่ม <br>
echo "<br>";

echo "Somchai = 20 <br>";
echo "Pimploy = 15 <br><br>";

echo checkage(20);
echo "<br>";
echo checkage(15);
?>

