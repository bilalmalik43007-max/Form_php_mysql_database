<?php
$servername = "localhost";
$username   = "root";   // default in XAMPP
$password   = "";       // default in XAMPP
$dbname     = "student_db";

$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name   = $_POST['name'];
$email  = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students (name, email, course) 
        VALUES ('$name', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "New student registered successfully!<br>";
    echo "<a href='view.php'>View Students</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>