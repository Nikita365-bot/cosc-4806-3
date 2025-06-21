<?php echo password_hash('Algoma1234', PASSWORD_DEFAULT);
<?php
$plain = 'YOUR_PASSWORD_HERE';
$hash = '$2y$10$PMjIvdS0iPUdqAnkCAzn5.6lQ/UIYU8HuN6oOsy/jZYHvcS/WMWdu'; // From your DB

if (password_verify($plain, $hash)) {
    echo "✅ Password matches!";
} else {
    echo "❌ Password does NOT match!";
}
