<?php

$pageTitle = 'Black Cherry Pie';
$metaDescription = <<<'TEXT'
A really scrummy tart that only needs a tin of black cherries to go with the left over pastry. It's not too sweet and just needs a dollop cream or ice cream
TEXT;
$ogDescription = <<<'TEXT'
A really scrummy tart that only needs a tin of black cherries to go with the left over pastry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/blackcherrypie/650x366/cherry-pie-cream-served.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/blackcherrypie.html';
$recipeName = 'black cherry pie';
$recipeIntro = <<<'TEXT'
A really scrummy tart that only needs a tin of black cherries to go with the left over pastry. It's not too sweet and just needs a dollop cream or ice cream
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/blackcherrypie.view.php';
