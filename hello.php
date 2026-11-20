<?php
// hello.php - Return data as JSON, not HTML

header('Content-Type: application/json; charset=utf-8');

$response = [
    'message' => 'Hello from the server!',
    'student' => 'Daniel P. Canasa',
    'course' => 'IPT 2',
    'time' => date('Y-m-d H:i:s')
];

// Return the response as JSON
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>