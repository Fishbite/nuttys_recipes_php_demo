<?php

require_once __DIR__ . '/../db_connect.php';

$page = $_GET['page'] ?? null;

if (!$page) {
    http_response_code(400);
    echo 'Bad request – no recipe specified.';
    exit;
}

// Fetch the recipe from the DB
$stmt = $pdo->prepare("SELECT * FROM recipe_cards WHERE page = ?");
$stmt->execute([$page]);
$recipe = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$recipe) {
    http_response_code(404);
    require __DIR__ . '/../views/404.php';
    exit;
}

// Send to view (you could reuse your existing grid-card view layout or make a new one)
require __DIR__ . '/../views/recipe-single.view.php';
