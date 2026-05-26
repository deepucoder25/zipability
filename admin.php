<?php
session_start();

define('ADMIN_DATA_PATH', __DIR__ . '/admin_data/');
define('ADMIN_PATH', __DIR__ . '/admin/');
define('UPLOAD_PATH', __DIR__ . '/uploads/blogs/');
define('UPLOAD_URL', 'uploads/blogs/');

// Simple routing
$action = $_GET['action'] ?? 'dashboard';

// Authentication check
if ($action !== 'login' && !isset($_SESSION['admin_logged_in'])) {
    header('Location: admin.php?action=login');
    exit;
}

// Function to save data
function saveData($filename, $data) {
    file_put_contents(ADMIN_DATA_PATH . $filename, json_encode($data, JSON_PRETTY_PRINT));
}

// Function to load data
function loadData($filename) {
    $path = ADMIN_DATA_PATH . $filename;
    if (!file_exists($path)) return [];
    return json_decode(file_get_contents($path), true) ?: [];
}

// Helper to slugify text
function slugify($text) {
    $text = strtolower($text);
    $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
    $text = preg_replace('~[\s-]+~', '-', $text);
    return trim($text, '-');
}

// Handle Logout
if ($action === 'logout') {
    session_destroy();
    header('Location: admin.php?action=login');
    exit;
}

// Include the requested action file
$action_file = ADMIN_PATH . $action . '.php';
if (file_exists($action_file)) {
    include $action_file;
} else {
    include ADMIN_PATH . 'dashboard.php';
}
?>
