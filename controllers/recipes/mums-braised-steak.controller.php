<?php

$pageTitle = 'Mum\'s Braised Steak & Mash| Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Mum's Braised Steak & Mash Sounds simple enough, my mum often made this for a family of five. Nowadays, on her budget? I struggled to re-create it for the same value
TEXT;
$ogDescription = <<<'TEXT'
Mum's Braised Steak & Mash Sounds simple enough, my mum often made this for a family of five
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/braised-steak/650x366/braised-steak-mash-and-broccoli.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/mums-braised-steak.html';
$recipeName = 'Mum\'s Braised Steak & Mash';
$recipeIntro = <<<'TEXT'
Mum's Braised Steak & Mash Sounds simple enough, my mum often made this for a family of five. Nowadays, on her budget? I struggled to re-create it for the same value
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/mums-braised-steak.view.php';
