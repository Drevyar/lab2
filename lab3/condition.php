<?php
$day = "Wednesday";
echo "to day is Wednesday <br>";
switch ($day) {
    case "Monday":
        echo "It's first day of week";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's normal day, do your work";
        break;
    case "Friday":
        echo "วันศุกร์ - เย้! สุดสัปดาห์มาแล้ว";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's free day enjoy your day";
        break;
    default:
        echo "Invalid day";
}
?>