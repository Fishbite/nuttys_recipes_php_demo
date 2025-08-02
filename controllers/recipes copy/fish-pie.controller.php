<?php

$pageTitle = 'Mum\'s Fish Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
this is my answer to create Mum's Fish Pie on a budget. I managed to get 4 pieces of frozen Atlantic wild cod for less than four quid (£4) so that makes it reasonable
TEXT;
$ogDescription = <<<'TEXT'
This is my answer to create Mum's Fish Pie on a budget! Simply delicious
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/fish-pie/650x366/fish-pie-baked-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/fish-pie.html';
$recipeName = 'Mum\'s Fish Pie';
$recipeIntro = <<<'TEXT'
this is my answer to create Mum's Fish Pie on a budget. I managed to get 4 pieces of frozen Atlantic wild cod for less than four quid (£4) so that makes it reasonable
TEXT;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/fish-pie.view.php';
