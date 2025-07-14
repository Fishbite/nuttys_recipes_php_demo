<?php

$pageTitle = 'Grandma\'s Chicken Soup | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Grandma's homemade chicken soup recipe, you can do so much with left over chicken, even if you have other uses for the left-over meat, the chicken bones can be used for soup
TEXT;
$ogDescription = <<<'TEXT'
Grandma's Chicken Soup, serve thoroughly warmed (not boiling) with fresh crusty white bread & lashings of butter
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chickensoup/650x366/chicken-soup-cup-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chickensoup.html';
$recipeName = 'Grandma\'s Chicken Soup';
$recipeIntro = <<<'TEXT'
Grandma's homemade chicken soup recipe, you can do so much with left over chicken, even if you have other uses for the left-over meat, the chicken bones can be used for soup
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/chickensoup.view.php';
