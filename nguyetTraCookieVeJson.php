<?php
header('Content-Type: application/json');

if (file_exists("cookies.txt")) {
    $cookies = file("cookies.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo json_encode($cookies);
} else {
    echo json_encode([]);
}