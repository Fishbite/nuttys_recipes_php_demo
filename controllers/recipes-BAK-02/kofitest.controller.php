<?php

$pageTitle = 'Easy Chicken Curry';
$metaDescription = <<<'TEXT'
Easy chicken curry is possibly my favourite home-made curry, it's a really easy to make, not too many ingredients & a fantastic  introduction to Indian cooking!
TEXT;
$ogDescription = <<<'TEXT'
TEXT;
$ogImage = '';
$canonical = '';
$recipeName = 'Kofitest';
$recipeIntro = <<<'TEXT'
Easy chicken curry is possibly my favourite home-made curry, it's a really easy to make, not too many ingredients & a fantastic  introduction to Indian cooking!
TEXT;
$styleBlock = <<<CSS
.floatingchat-container-wrap {
          left: unset;
          right: 10%;
          bottom: 50px;
        }
        .floating-chat-kofi-popup-iframe {
          left: unset;
          right: 10%;
        }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
];

require __DIR__ . '/../../views/recipes/kofitest.view.php';
