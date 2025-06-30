<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

/**
 * Generate alt text from an image path.
 * Converts filename like "aloo-gobi-plated.webp" to "aloo gobi plated"
 *
 * @param string $imagePath
 * @return string
 */
function generateImageAlt($imagePath)
{
    $filename = pathinfo($imagePath, PATHINFO_FILENAME);
    return str_replace('-', ' ', $filename);
}


/**
 * Helper function: renders a recipe card.
 * @param array $recipe
 * @return string HTML markup for a recipe card.
 */
// NOTE: function renders recipe cards that point to the static HTML files for each recipe
// function renderRecipeCard($recipe)
// {
//     $domain = 'https://nuttyskitchen.co.uk/';
//     $ext = '.html';
//     // Sanitize all the necessary values.
//     $imgPath  = htmlspecialchars($recipe['image']);
//     $caption  = htmlspecialchars($recipe['caption']);
//     $page     = $domain . htmlspecialchars($recipe['page']) . $ext;
//     $imgTitle = htmlspecialchars($recipe['imgTitle']); // SEO-optimized image title
//     // Generate alt text based on the image filename.
//     $alt = str_replace('-', ' ', pathinfo($imgPath, PATHINFO_FILENAME));

//     return "<a href='$page'><div class='recipe-card link'>
//                 <img
//                 loading='lazy'
//                 width='200'
//                 height='200'
//                 src='$imgPath'
//                 alt='$alt'
//                 title='$imgTitle'>
//                 <figcaption>$caption</figcaption>
//             </div></a>";
// }

// function renders recipe cards that point to the appropriate recipe controllers
function renderRecipeCard($recipe)
{
    $domain = '/recipes/';
    // $ext = '.html';
    // Sanitize all the necessary values.
    $imgPath  = htmlspecialchars($recipe['image']);
    $caption  = htmlspecialchars($recipe['caption']);
    $page     = $domain . htmlspecialchars($recipe['page']);
    $imgTitle = htmlspecialchars($recipe['imgTitle']); // SEO-optimized image title
    // Generate alt text based on the image filename.
    $alt = str_replace('-', ' ', pathinfo($imgPath, PATHINFO_FILENAME));

    return "<a href='$page'><div class='recipe-card link'>
                <img 
                loading='lazy' 
                width='200' 
                height='200' 
                src='$imgPath' 
                alt='$alt' 
                title='$imgTitle'>
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
 * @param string $description Category description.
 * @param array  $recipes     Array of recipes for that category.
 * @return string
 */
function renderCategoryGrid($cat, $description, $recipes)
{
    $html = "<div class='category-card' id='" . htmlspecialchars($cat) . "'>
                <h3>" . htmlspecialchars($cat) . "</h3>
                <p>" . htmlspecialchars($description) . "</p>
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
