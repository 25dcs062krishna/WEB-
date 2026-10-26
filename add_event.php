<?php

require "db.php";

$event_name = "Python Workshop";
$event_date = "2026-10-15";
$description = "Workshop on Python programming";

$sql = "INSERT INTO events (event_name, event_date, description)
        VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([$event_name, $event_date, $description]);

echo "Event added successfully";

?>