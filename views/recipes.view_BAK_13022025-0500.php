<?php
require "../controllers/recipes.controller.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recipes Grid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- Preload the Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <h1>Recipes</h1>

    <!-- Search Form -->
    <form class="search-form" action="/views/recipes.view.php" method="GET">
        <label for="category">Category:</label>
        <select id="category" name="category">
            <option value="all" <?= $searchCategory === 'all' ? 'selected' : ''; ?>>All
                Categories</option>
            <?php foreach ($categories as $cat): ?>
            <option value="<?= htmlspecialchars($cat) ?>" <?= $cat === $searchCategory ? 'selected' : ''; ?>>
                <?= htmlspecialchars(ucfirst($cat)) ?>
            </option>
            <?php endforeach; ?>
        </select>
        <label for="search">Keyword:</label>
        <input type="text" id="search" name="search" placeholder="Enter keyword..."
            value="<?= htmlspecialchars($searchTerm); ?>">
        <button type="submit">Search</button>
    </form>

    <!-- Recipe Grid -->
    <div class="recipe-grid">
        <?php
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