<?php
require 'db_connect.php';

/**
 * Helper function: renders a recipe card.
 * @param array $recipe
 * @return string HTML markup for a recipe card.
 */
function renderRecipeCard($recipe)
{
    // Sanitize all the necessary values.
    $imgPath  = htmlspecialchars($recipe['image']);
    $title    = htmlspecialchars($recipe['title']);  // For other uses (e.g., heading)
    $caption  = htmlspecialchars($recipe['caption']);
    $page     = htmlspecialchars($recipe['page']);
    $imgTitle = htmlspecialchars($recipe['imgTitle']); // New: the SEO-optimized image title
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
    $html = "";
    
    // Output the Category Card (you can later enhance this with a real description)
    $html .= "<div class='category-card'>
                <h3>" . htmlspecialchars($cat) . "</h3>
                <p>" . htmlspecialchars("Description for " . $cat) . "</p>
              </div>";
    
    $count = count($recipes);

    // Determine layout for the first row after the category card:
    if ($count > 0) {
        // For the first row, we want two cells.
        if ($count == 1) {
            // Only one recipe: output a blank card then the recipe card.
            $html .= renderBlankCard();
            $html .= renderRecipeCard($recipes[0]);
            $recipes = array_slice($recipes, 1);
        } else {
            // Two or more recipes: output the first two recipe cards.
            $html .= renderRecipeCard($recipes[0]);
            $html .= renderRecipeCard($recipes[1]);
            $recipes = array_slice($recipes, 2);
        }
    }
    
    // Process remaining recipes in rows of three cells.
    while (count($recipes) > 0) {
        // For each row, we want three cells.
        $rowRecipes = array_slice($recipes, 0, 3);
        $numRow = count($rowRecipes);
        $blanksNeeded = 3 - $numRow;
        
        // Right-align the recipe cards: output blank cards first, then recipe cards.
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
$searchCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
$searchTerm     = isset($_GET['search']) ? trim($_GET['search']) : '';

// Build the SQL query based on search parameters.
if ($searchCategory === 'all' && $searchTerm === '') {
    // No search parameters: fetch all recipes.
    $stmt = $pdo->query("SELECT * FROM recipes ORDER BY category, id");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM recipes WHERE 1";
    $params = [];
    if ($searchCategory !== 'all') {
        $sql .= " AND category = ?";
        $params[] = $searchCategory;
    }
    if ($searchTerm !== '') {
        $sql .= " AND (title LIKE ? OR description LIKE ?)";
        $params[] = "%" . $searchTerm . "%";
        $params[] = "%" . $searchTerm . "%";
    }
    $sql .= " ORDER BY category, id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Group the recipes by category.
$groupedRecipes = [];
foreach ($recipes as $recipe) {
    $groupedRecipes[$recipe['category']][] = $recipe;
}

// Fetch a list of distinct categories (for the dropdown)
$stmt = $pdo->query("SELECT DISTINCT category FROM recipes ORDER BY category");
$categories = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recipes Grid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --clr-grey-9: hsl(212, 33%, 89%);
            --clr-yellow-golden: hsla(43, 100%, 57%, 0.5);
            --clr-yellow-golden-pale: hsla(43, 50%, 62%);
            --clr-grey-4: hsl(209, 28%, 39%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f1f5f8;
            color: #333;
            margin: 0;
            padding: 1rem;
        }

        /* Search form styling */
        .search-form {
            max-width: 1170px;
            margin: 0 auto 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
        }

        .search-form select,
        .search-form input[type="text"],
        .search-form button {
            padding: 0.5rem;
            font-size: 1rem;
        }

        /* Grid styling */
        .recipe-grid {
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(3, 1fr);
            max-width: 1170px;
            margin: 0 auto;
            align-items: start;
        }

        .recipe-grid figcaption {
            color: var(--clr-grey-4);
            margin: 1rem auto 0;
            text-transform: capitalize;
        }

        .recipe-grid a {
            color: var(--clr-grey-4);
            text-decoration: none;
        }

        .recipe-grid .link:hover {
            border: 1px solid var(--clr-yellow-golden-pale);
            box-shadow: 0px 0px 5px 1px var(--clr-yellow-golden);
            cursor: pointer;
        }

        .category-card,
        .recipe-card,
        .blank-card {
            border: 1px solid var(--clr-grey-9);
            padding: 1rem;
            text-align: center;
            border-radius: 5px;
        }

        .recipe-card img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }

        .blank-card {
            border: none;
            background: transparent;
            min-height: 220px;
        }

        /* For screens <= 799px, collapse grid to a single column and hide blank cards */
        @media screen and (max-width: 799px) {
            .recipe-grid {
                grid-template-columns: 1fr;
                max-width: 85vw;
                gap: 1rem;
            }

            .blank-card {
                display: none;
            }
        }
    </style>
    <!-- Preload the Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <h1>Recipes</h1>

    <!-- Search Form -->
    <form class="search-form" action="recipes.php" method="GET">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="all" <?php if ($searchCategory === 'all') {
                echo 'selected';
            } ?>>All
                Categories</option>
            <?php
            foreach ($categories as $cat) {
                $sel = ($cat === $searchCategory) ? 'selected' : '';
                echo "<option value='" . htmlspecialchars($cat) . "' $sel>" . htmlspecialchars(ucfirst($cat)) . "</option>";
            }
?>
        </select>
        <label for="search">Keyword:</label>
        <input type="text" id="search" name="search" placeholder="Enter keyword..."
            value="<?php echo htmlspecialchars($searchTerm); ?>">
        <button type="submit">Search</button>
    </form>

    <!-- Recipe Grid -->
    <div class="recipe-grid">
        <?php
        // If search is active, group recipes by category; if not, group all recipes.
        if (!empty($groupedRecipes)) {
            foreach ($groupedRecipes as $catName => $recipesArray) {
                echo renderCategoryGrid($catName, $recipesArray);
            }
        } else {
            echo "<p>No recipes found matching your criteria.</p>";
        }
?>
    </div>
</body>

</html>