<?php
$host = 'sql313.infinityfree.com';
$dbname = 'if0_37599181_recipes';
$user = 'if0_37599181';
$pass = '2kt39eHOkl7u';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
