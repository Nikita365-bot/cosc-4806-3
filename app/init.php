<?php
// Turn on error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Only run these if session hasn't started yet
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
            'lifetime' => 28800,
            'path' => '/',
            'domain' => '',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'None'  // <-- Important for Replit
        ]);
        session_start();
    }

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/config.php';
require_once 'database.php';
