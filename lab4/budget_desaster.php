<?php
$conn = new mysqli("localhost", "std6730202050", "Pz!4jv9Y", "it_std6730202050");

$tableName = "budget_disaster";

echo "<h2>ตาราง : $tableName</h2>";

// สร้างตาราง
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// แสดงชื่อฟิลด์ (หัวตาราง)
$result = $conn->query("SELECT * FROM $tableName");

if ($result->num_rows > 0) {
    // หัวตาราง
    echo "<tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";

    // ข้อมูลแต่ละแถว
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='100%' align='center' style='color:red;'>ไม่มีข้อมูล</td></tr>";
}

echo "</table>";

$conn->close();
?>