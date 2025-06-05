<?php
// Temporary redirect to static recipe page
$redirectURL = 'https://www.nuttyskitchen.co.uk/' . $recipe['page'] . '.html';
header('Location: ' . $redirectURL, true, 302);
exit;
