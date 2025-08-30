<?php
    // Load configuration
    $config_file = __DIR__ . '/config.php';
    if (!file_exists($config_file)) {
        die('Configuration file not found. Please copy config.sample.php to config.php and update with your database credentials.');
    }
    require_once $config_file;

    // Database connection using configuration constants
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($mysqli -> connect_errno){
        if (DEBUG_MODE) {
            die("Database connection failed: " . $mysqli->connect_error);
        } else {
            header("location: db_error.php");
            exit(1);
        }
    }

    // Set character set to UTF-8 for proper encoding
    $mysqli->set_charset("utf8mb4");

    // Application settings
    define('SITE_ROOT', realpath(dirname(__FILE__)));
    date_default_timezone_set(TIMEZONE);
?>