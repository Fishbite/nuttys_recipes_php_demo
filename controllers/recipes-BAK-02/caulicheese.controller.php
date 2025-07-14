<?php

$pageTitle = 'Cauliflower Cheese | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Cauliflower, what a wonderful ingredient. To make this totally vegetarian just leave out the bacon, or try substituting with a meat free bacon product
TEXT;
$ogDescription = <<<'TEXT'
Cauliflower, what a wonderful ingredient. To make this totally vegetarian just leave out the bacon
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/caulicheese/650x366/cauli-cheese-ready-02.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/caulicheese.html';
$recipeName = 'Caulicheese';
$recipeIntro = <<<'TEXT'
Cauliflower, what a wonderful ingredient. To make this totally vegetarian just leave out the bacon, or try substituting with a meat free bacon product
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/caulicheese.view.php';
