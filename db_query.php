<?php
// --- Process Search Parameters ---
$searchCategory = $_POST['category'] ?? 'all';
$searchTerm     = trim($_POST['search'] ?? '');

// Build the SQL query based on search parameters.
if ($searchCategory === 'all' && $searchTerm === '') {
    $stmt = $pdo->query("SELECT * FROM recipe_cards ORDER BY category, id");
} else {
    $sql = "SELECT * FROM recipe_cards WHERE 1";
    $params = [];
    if ($searchCategory !== 'all') {
        $sql .= " AND category = ?";
        $params[] = $searchCategory;
    }
    if ($searchTerm !== '') {
        // $sql .= " AND (imgTitle LIKE ? OR description LIKE ?)";
        // $params[] = "%" . $searchTerm . "%";
        // $params[] = "%" . $searchTerm . "%";

        // using concat to ensure whole-word matching
        // rather than matching PIECES when searching for PIE
        $sql .= " AND (CONCAT(' ', imgTitle, ' ') LIKE ? OR CONCAT(' ', description, ' ') LIKE ?)";
        $params[] = "% " . $searchTerm . " %";
        $params[] = "% " . $searchTerm . " %";

    }
    $sql .= " ORDER BY category, id";
    $stmt = $pdo->prepare($sql);

    // debugging*******************
    // echo "<pre>";
    // echo "SQL: " . $sql . "\n";
    // print_r($params);
    // echo "</pre>";
    // debugging*******************

    $stmt->execute($params);
}

$recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// debugging*******************
// foreach ($recipes as $recipe) {
//     echo "<pre>";
//     print_r($recipe);
//     echo "</pre>";
// }
// debugging*******************


// Fetch category descriptions from category_cards table.
$stmt = $pdo->query("SELECT name, description FROM category_cards ORDER BY name");
$categoryDescriptions = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

// Group the recipes by category.
$groupedRecipes = [];
foreach ($recipes as $recipe) {
    $groupedRecipes[$recipe['category']][] = $recipe;
}

$stmt = $pdo->query("SELECT DISTINCT name FROM category_cards ORDER BY name");
$categories = $stmt->fetchAll(PDO::FETCH_COLUMN);
