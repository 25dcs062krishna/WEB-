<?php

require "db.php";

$name = "Krishna";
$email = "krishna@gmail.com";
$course = "BTech CSE";
$year = 2;

$sql = "INSERT INTO students (name, email, course, year)
        VALUES (?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([$name, $email, $course, $year]);

echo "Student added successfully";

?>