<?php

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/functions.php';

// Get the page parameter from the URL, e.g., ?page=news/index
$page = $_GET['page'] ?? 'dashboard';

// Sanitize the page parameter to prevent directory traversal attacks
$page = preg_replace('/[^a-zA-Z0-9\/]/', '', $page);

// Construct the file path
$fileToInclude = __DIR__ . '/../views/admin/' . $page . '.php';

// Check if the file exists before including it
if (file_exists($fileToInclude)) {
    require_once $fileToInclude;
} else {
    // Default behavior: Include dashboard.php
    require_once __DIR__ . '/../views/admin/dashboard.php';
}

// Include the common parts of your layout here




//require_once __DIR__ . '/../config/db.php';
//require_once __DIR__ . '/../config/functions.php';
//
//// Get the segments of the URL path
//$requestUri = $_SERVER['REQUEST_URI'];
//$segments = explode('/', $requestUri);
//
//// Sanitize the segments to prevent directory traversal attacks
//$sanitizedSegments = array_map(function ($segment) {
//    return preg_replace('/[^a-zA-Z0-9]/', '', $segment);
//}, $segments);
//
//// Construct the page path
//$pagePath = implode('/', $sanitizedSegments);
//
//// Construct the file path
//$fileToInclude = __DIR__ . '/../views/admin/' . $pagePath . '.php';
//
//// Check if the file exists before including it
//if (file_exists($fileToInclude)) {
//    require_once $fileToInclude;
//} else {
//    // Default behavior: Include dashboard.php
//    require_once __DIR__ . '/../views/admin/dashboard.php';
//}
//
//// Include the common parts of your layout here




