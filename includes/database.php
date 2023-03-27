<?php
$db = mysqli_connect(
    $_ENV['DB_HOST'] ?? 'us-cdbr-east-06.cleardb.net',
    $_ENV['DB_USER'] ?? 'b824cc74451e96', 
    $_ENV['DB_PASS'] ?? '7e94e75d', 
    $_ENV['DB_NAME'] ?? 'heroku_8f7b1849124d968'
);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
