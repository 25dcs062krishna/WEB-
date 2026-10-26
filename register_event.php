<?php

require "db.php";

$student_id = 1;
$event_id = 1;
$registration_date = date("Y-m-d");

$sql = "INSERT INTO registrations
        (student_id, event_id, registration_date)
        VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $student_id,
    $event_id,
    $registration_date
]);

echo "Student registered successfully";

?>