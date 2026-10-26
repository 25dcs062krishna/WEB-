<?php

require "db.php";

$email = "krishna@gmail.com";

$sql = "SELECT * FROM students WHERE email = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$email]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

if ($student) {
    echo "Student ID: " . $student["student_id"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Email: " . $student["email"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";
    echo "Year: " . $student["year"];
} else {
    echo "Student not found";
}

?>