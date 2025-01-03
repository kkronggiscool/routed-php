<?php
// index.php

// A basic routing mechanism
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        // Load home.php page
        include __DIR__ . '/pages/home.php';
        break;

    case '/phpinfo':
        // Load info.php page
        include __DIR__ . '/pages/info.php';
        break;

    case '/dick':
        // random ass page 🙏
        include __DIR__ . "/pages/dick.php";
        break;

    // Add more cases for other routes as needed
    default:
        http_response_code(404);
        echo "Page not found!";
        break;
}
?>
