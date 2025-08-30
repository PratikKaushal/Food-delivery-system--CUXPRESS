<?php
/**
 * Database Configuration Sample File
 * 
 * Copy this file to config.php and update with your actual database credentials
 * NEVER commit config.php to version control
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'your_database_username');
define('DB_PASS', 'your_database_password');
define('DB_NAME', 'cufeast');

// Application Settings
define('SITE_URL', 'http://localhost/CUXPRESS/');
define('TIMEZONE', 'Asia/Bangkok');

// Security Settings (optional, for future enhancements)
define('SECURE_AUTH_KEY', 'put-your-unique-phrase-here');
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds

// Development/Production Mode
define('DEBUG_MODE', false); // Set to true for development, false for production

// Email Configuration (optional, for future enhancements)
define('SMTP_HOST', 'smtp.example.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your_email@example.com');
define('SMTP_PASS', 'your_email_password');
define('SMTP_FROM', 'noreply@example.com');
define('SMTP_FROM_NAME', 'CUXPRESS');

// File Upload Settings
define('MAX_FILE_SIZE', 5242880); // 5MB in bytes
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif']);

// Pagination Settings
define('ITEMS_PER_PAGE', 12);
define('ORDERS_PER_PAGE', 10);

// Currency Settings
define('CURRENCY_SYMBOL', '฿');
define('CURRENCY_CODE', 'THB');
?>