<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");

echo "<h2 style= 'text-align: center;'>Registered Students</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style= 'margin: auto;'>
<tr><th style='background-color: navy;color: white;' >ID</th><th style='background-color: navy;color: white;' >Name</th><th style='background-color: navy;color: white;' >Email</th><th style='background-color: navy;color: white;' >Course</th><th style='background-color: navy;color: white;' >Registered At</th></tr>";


while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['course']."</td>
            <td>".$row['reg_date']."</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>