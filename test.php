<?php
require_once 'app/config.php';       // ✅ Now pointing to the correct location
require_once 'app/database.php';

try {
    $db = db_connect();
    echo "Connected to database successfully!";
} catch (Exception $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
