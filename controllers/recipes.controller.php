<?php
require '../db_connect.php';

/**
 * Helper function: renders a recipe card.
 * @param array $recipe
 * @return string HTML markup for a recipe card.
 */
function renderRecipeCard($recipe)
{
    // Sanitize all the necessary values.
    $imgPath  = htmlspecialchars($recipe['image']);
    $caption  = htmlspecialchars($recipe['caption']);
    $page     = htmlspecialchars($recipe['page']);
    $imgTitle = htmlspecialchars($recipe['imgTitle']); // SEO-optimized image title
    // Generate alt text based on the image filename.
    $alt = str_replace('-', ' ', pathinfo($imgPath, PATHINFO_FILENAME));

    return "<a href='recipe.php?page=$page'><div class='recipe-card link'>
                <img src='$imgPath' alt='$alt' title='$imgTitle'>
                <figcaption>$caption</figcaption>
            </div></a>";
}

/**
 * Helper function: renders a blank card.
 * @return string HTML markup for a blank card.
 */
function renderBlankCard()
{
    return "<div class='blank-card'></div>";
}

/**
 * Renders the grid for one category.
 *
 * @param string $cat         Category name.
 * @param array  $recipes     Array of recipes for that category.
 * @return string
 */
function renderCategoryGrid($cat, $recipes)
{
    $html = "<div class='category-card'>
                <h3>" . htmlspecialchars($cat) . "</h3>
                <p>" . htmlspecialchars("Description for " . $cat) . "</p>
              </div>";

    $count = count($recipes);

    if ($count > 0) {
        if ($count == 1) {
            $html .= renderBlankCard();
            $html .= renderRecipeCard($recipes[0]);
            $recipes = array_slice($recipes, 1);
        } else {
            $html .= renderRecipeCard($recipes[0]);
            $html .= renderRecipeCard($recipes[1]);
            $recipes = array_slice($recipes, 2);
        }
    }

    while (count($recipes) > 0) {
        $rowRecipes = array_slice($recipes, 0, 3);
        $numRow = count($rowRecipes);
        $blanksNeeded = 3 - $numRow;

        for ($i = 0; $i < $blanksNeeded; $i++) {
            $html .= renderBlankCard();
        }
        foreach ($rowRecipes as $recipe) {
            $html .= renderRecipeCard($recipe);
        }

        $recipes = array_slice($recipes, $numRow);
    }

    return $html;
}

// --- Process Search Parameters ---
$searchCategory = $_GET['category'] ?? 'all';
$searchTerm     = trim($_GET['search'] ?? '');

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
        $sql .= " AND (imgTitle LIKE ? OR description LIKE ?)";
        $params[] = "%" . $searchTerm . "%";
        $params[] = "%" . $searchTerm . "%";
    }
    $sql .= " ORDER BY category, id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
}

$recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Group the recipes by category.
$groupedRecipes = [];
foreach ($recipes as $recipe) {
    $groupedRecipes[$recipe['category']][] = $recipe;
}

// Fetch a list of distinct categories (for the dropdown)
$stmt = $pdo->query("SELECT DISTINCT category FROM recipe_cards ORDER BY category");
$categories = $stmt->fetchAll(PDO::FETCH_COLUMN);
