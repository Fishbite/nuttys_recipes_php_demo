<?php

$pageTitle = 'Nuttys Braised Steak | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
the cold weather upon us, it's the perfect time for Nutty's Braised Steak in a rich gravy with shallots, leeks and whole chestnut mushrooms, which are absolutely delicious
TEXT;
$ogDescription = <<<'TEXT'
Nuttys Braised Steak in a rich gravy with shallots, leeks and whole chestnut mushrooms
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/nuttys-braised-steak/650x366/braised-steak-mash-and-veg-plated.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/nuttys-braised-steak.html';
$recipeName = 'nutty\'s braised steak';
$recipeIntro = <<<'TEXT'
the cold weather upon us, it's the perfect time for Nutty's Braised Steak in a rich gravy with shallots, leeks and whole chestnut mushrooms, which are absolutely delicious
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        /* basically, increase the value until the background
           images are below the intro' paragraphs */
        --bg-1st-col-stop: 35%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/nuttys-braised-steak.view.php';
