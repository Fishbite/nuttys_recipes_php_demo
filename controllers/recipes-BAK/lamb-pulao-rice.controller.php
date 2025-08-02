<?php

$pageTitle = 'lamb pulao rice | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Lamb Pulao Rice is a delicious baked rice dish made with minced lamb and aromatic spices. The result... delicately spiced combination of succulent lamb mince and fluffy rice
TEXT;
$ogDescription = <<<'TEXT'
lamb pulao rice description here please!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/lamb-pulao-rice/650x366/lamb-pulao-rice-in-dish-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/lamb-pulao-rice.html';
$recipeName = 'lamb pulao rice';
$recipeIntro = <<<'TEXT'
Lamb Pulao Rice is a delicious baked rice dish made with minced lamb and aromatic spices. The result... delicately spiced combination of succulent lamb mince and fluffy rice
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

require __DIR__ . '/../../views/recipes/lamb-pulao-rice.view.php';
