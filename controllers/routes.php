<?php

// separate any path from any query string that may be tagged on to the
// end of the path. e.g. /contact?name=mikehunt
// parse_uri returns an array with a path and a query as separate entries
// e.g. ["path" => "contact", "query" => "contact?name=mikehunt"]

// So, grab the path from the array
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// print_r($_SERVER['REQUEST_URI']);
// echo '<br>';
// print_r($uri);
// echo '<br>';

// if a user types /recipes we re-direct /recipes to /recipes/ so that
// the URL in the address bar always has a trailing slash. This will
// allow a user to then type the recipe name. e.g. aloo-gobi, instead
// of /aloo-gobi
// If URL is missing trailing slash, redirect with a 301
// Redirect /recipes to /recipes/ (trailing slash)
if ($uri === '/recipes') {
    header("Location: /recipes/", true, 301);
    exit;
}

$routes = [
    '/' => __DIR__ . '/home-page.controller.php',
    '/home' => __DIR__ . '/home-page.controller.php',
    '/recipes/' => __DIR__ . '/recipes.controller.php',
    '/contact' => __DIR__ . '/contact-form.controller.php',
    '/recipes/aloo-gobi' => __DIR__ . '/recipes/aloo-gobi.controller.php',
    '/recipes/appleblackberrycrumble' => __DIR__  . '/recipes/appleblackberrycrumble.controller.php',
    '/recipes/authentic-seekh-kebabs' => __DIR__  . '/recipes/authentic-seekh-kebabs.controller.php',
    '/recipes/basmati-rice' => __DIR__  . '/recipes/basmati-rice.controller.php',
    '/recipes/beef-and-mushroom-suet-pastry-pie' => __DIR__  . '/recipes/beef-and-mushroom-suet-pastry-pie.controller.php',
    '/recipes/beef-curry-with-green-beans' => __DIR__  . '/recipes/beef-curry-with-green-beans.controller.php',
    '/recipes/beef-pork-madras' => __DIR__  . '/recipes/beef-pork-madras.controller.php',
    '/recipes/beef-stew-and-dumplings' => __DIR__  . '/recipes/beef-stew-and-dumplings.controller.php',
    '/recipes/beef-stroganoff' => __DIR__  . '/recipes/beef-stroganoff.controller.php',
    '/recipes/beefporkchilli' => __DIR__  . '/recipes/beefporkchilli.controller.php',
    '/recipes/beefporkpastabake' => __DIR__  . '/recipes/beefporkpastabake.controller.php',
    '/recipes/beefporkpastasauce' => __DIR__  . '/recipes/beefporkpastasauce.controller.php',
    '/recipes/beefspinachcurry' => __DIR__  . '/recipes/beefspinachcurry.controller.php',
    '/recipes/beefy-meatballs-onion-gravy' => __DIR__  . '/recipes/beefy-meatballs-onion-gravy.controller.php',
    '/recipes/bellyporkdinner' => __DIR__  . '/recipes/bellyporkdinner.controller.php',
    '/recipes/blackberry-and-soured-cream-flan' => __DIR__  . '/recipes/blackberry-and-soured-cream-flan.controller.php',
    '/recipes/blackcherrypie' => __DIR__  . '/recipes/blackcherrypie.controller.php',
    '/recipes/blue-cheese-macaroni-pie' => __DIR__  . '/recipes/blue-cheese-macaroni-pie.controller.php',
    '/recipes/butter-chicken' => __DIR__  . '/recipes/butter-chicken.controller.php',
    '/recipes/caribbean-creamy-pork-curry' => __DIR__  . '/recipes/caribbean-creamy-pork-curry.controller.php',
    '/recipes/cauli-cheese-smoked-haddock-bake' => __DIR__  . '/recipes/cauli-cheese-smoked-haddock-bake.controller.php',
    '/recipes/caulicheese' => __DIR__  . '/recipes/caulicheese.controller.php',
    // '/recipes/cauliflower-cheese' => __DIR__  . '/recipes/cauliflower-cheese.controller.php',
    '/recipes/cauliflower-curry' => __DIR__  . '/recipes/cauliflower-curry.controller.php',
    '/recipes/caulifrankcheese' => __DIR__  . '/recipes/caulifrankcheese.controller.php',
    '/recipes/celeriac-soup' => __DIR__  . '/recipes/celeriac-soup.controller.php',
    '/recipes/chapati' => __DIR__  . '/recipes/chapati.controller.php',
    '/recipes/cheese-and-onion-quiche' => __DIR__  . '/recipes/cheese-and-onion-quiche.controller.php',
    '/recipes/cheesesauce' => __DIR__  . '/recipes/cheesesauce.controller.php',
    '/recipes/chicken-and-gammon-pie' => __DIR__  . '/recipes/chicken-and-gammon-pie.controller.php',
    '/recipes/chicken-and-tomato-balti' => __DIR__  . '/recipes/chicken-and-tomato-balti.controller.php',
    '/recipes/chicken-biryani' => __DIR__  . '/recipes/chicken-biryani.controller.php',
    '/recipes/chicken-in-cashew-nut-sauce' => __DIR__  . '/recipes/chicken-in-cashew-nut-sauce.controller.php',
    '/recipes/chicken-in-creamy-peppercorn-sauce' => __DIR__  . '/recipes/chicken-in-creamy-peppercorn-sauce.controller.php',
    '/recipes/chicken-tandoori-grill' => __DIR__  . '/recipes/chicken-tandoori-grill.controller.php',
    '/recipes/chicken-thighs-in-spicy-hot-sauce' => __DIR__  . '/recipes/chicken-thighs-in-spicy-hot-sauce.controller.php',
    '/recipes/chicken-tikka-grilled-escalope' => __DIR__  . '/recipes/chicken-tikka-grilled-escalope.controller.php',
    '/recipes/chicken-with-mango' => __DIR__  . '/recipes/chicken-with-mango.controller.php',
    '/recipes/chickenchilimex' => __DIR__  . '/recipes/chickenchilimex.controller.php',
    '/recipes/chickenlasagne' => __DIR__  . '/recipes/chickenlasagne.controller.php',
    '/recipes/chickenmushroompasta' => __DIR__  . '/recipes/chickenmushroompasta.controller.php',
    '/recipes/chickenmushroompie' => __DIR__  . '/recipes/chickenmushroompie.controller.php',
    '/recipes/chickensoup' => __DIR__  . '/recipes/chickensoup.controller.php',
    '/recipes/chickenvindaloo' => __DIR__  . '/recipes/chickenvindaloo.controller.php',
    '/recipes/chinese-chicken-curry' => __DIR__  . '/recipes/chinese-chicken-curry.controller.php',
    '/recipes/chinese-noodles-with-beansprouts' => __DIR__  . '/recipes/chinese-noodles-with-beansprouts.controller.php',
    '/recipes/chipotle-chicken-burrito' => __DIR__  . '/recipes/chipotle-chicken-burrito.controller.php',
    '/recipes/chocolate-cake' => __DIR__  . '/recipes/chocolate-cake.controller.php',
    '/recipes/chorizo-cod-stew' => __DIR__  . '/recipes/chorizo-cod-stew.controller.php',
    '/recipes/christmas-prepared' => __DIR__  . '/recipes/christmas-prepared.controller.php',
    '/recipes/cornedbeefmashpie' => __DIR__  . '/recipes/cornedbeefmashpie.controller.php',
    '/recipes/cottage-pie' => __DIR__  . '/recipes/cottage-pie.controller.php',
    // '/recipes/creamy-peppercorn-sauce' => __DIR__  . '/recipes/creamy-peppercorn-sauce.controller.php',
    '/recipes/curry-leaf-masala-chicken-fry' => __DIR__  . '/recipes/curry-leaf-masala-chicken-fry.controller.php',
    '/recipes/damson-and-soured-cream-tart' => __DIR__  . '/recipes/damson-and-soured-cream-tart.controller.php',
    '/recipes/dhal-with-fried-spices' => __DIR__  . '/recipes/dhal-with-fried-spices.controller.php',
    '/recipes/dodgy-kebab' => __DIR__  . '/recipes/dodgy-kebab.controller.php',
    '/recipes/easy-chicken-curry' => __DIR__  . '/recipes/easy-chicken-curry.controller.php',
    '/recipes/egg-fried-rice' => __DIR__  . '/recipes/egg-fried-rice.controller.php',
    '/recipes/fish-and-chorizo-potato-pie' => __DIR__  . '/recipes/fish-and-chorizo-potato-pie.controller.php',
    '/recipes/fish-fillets-with-chilli-sauce' => __DIR__  . '/recipes/fish-fillets-with-chilli-sauce.controller.php',
    '/recipes/fish-pie' => __DIR__  . '/recipes/fish-pie.controller.php',
    '/recipes/fluffy-mashed-potatoes' => __DIR__  . '/recipes/fluffy-mashed-potatoes.controller.php',
    '/recipes/fruit-cake' => __DIR__  . '/recipes/fruit-cake.controller.php',
    '/recipes/gammon-joint-with-mustard-sauce' => __DIR__  . '/recipes/gammon-joint-with-mustard-sauce.controller.php',
    '/recipes/gingerbread' => __DIR__  . '/recipes/gingerbread.controller.php',
    // '/recipes/gravy' => __DIR__  . '/recipes/gravy.controller.php',
    '/recipes/jamaican-pumpkin-soup' => __DIR__  . '/recipes/jamaican-pumpkin-soup.controller.php',
    '/recipes/jamaican-rice-and-peas' => __DIR__  . '/recipes/jamaican-rice-and-peas.controller.php',
    '/recipes/jerk-chicken' => __DIR__  . '/recipes/jerk-chicken.controller.php',
    '/recipes/jerked-chicken-curry' => __DIR__  . '/recipes/jerked-chicken-curry.controller.php',
    '/recipes/jerked-chicken-escalope-grill' => __DIR__  . '/recipes/jerked-chicken-escalope-grill.controller.php',
    '/recipes/jerked-pork-curry' => __DIR__  . '/recipes/jerked-pork-curry.controller.php',
    '/recipes/jerked-pork-steaks-grill' => __DIR__  . '/recipes/jerked-pork-steaks-grill.controller.php',
    '/recipes/karahi-chicken-curry' => __DIR__  . '/recipes/karahi-chicken-curry.controller.php',
    '/recipes/khara-masala-balti-chicken' => __DIR__  . '/recipes/khara-masala-balti-chicken.controller.php',
    '/recipes/lamb-curry-with-spinach' => __DIR__  . '/recipes/lamb-curry-with-spinach.controller.php',
    '/recipes/lamb-kofta-curry' => __DIR__  . '/recipes/lamb-kofta-curry.controller.php',
    '/recipes/lamb-peas-mint-curry' => __DIR__  . '/recipes/lamb-peas-mint-curry.controller.php',
    '/recipes/lamb-pulao-rice' => __DIR__  . '/recipes/lamb-pulao-rice.controller.php',
    '/recipes/lamb-tikka-grill-steaks' => __DIR__  . '/recipes/lamb-tikka-grill-steaks.controller.php',
    '/recipes/lambmashpie' => __DIR__  . '/recipes/lambmashpie.controller.php',
    '/recipes/luxury-chicken-pie' => __DIR__  . '/recipes/luxury-chicken-pie.controller.php',
    '/recipes/macaroni-pie' => __DIR__  . '/recipes/macaroni-pie.controller.php',
    '/recipes/masala-veg-with-fresh-fenugreek' => __DIR__  . '/recipes/masala-veg-with-fresh-fenugreek.controller.php',
    '/recipes/mashed-roots' => __DIR__  . '/recipes/mashed-roots.controller.php',
    '/recipes/mediterranean-style-vegetables-with-pork-steaks' => __DIR__  . '/recipes/mediterranean-style-vegetables-with-pork-steaks.controller.php',
    '/recipes/mums-braised-steak' => __DIR__  . '/recipes/mums-braised-steak.controller.php',
    '/recipes/mushroom-chow-mein' => __DIR__  . '/recipes/mushroom-chow-mein.controller.php',
    '/recipes/mushroom-fried-rice' => __DIR__  . '/recipes/mushroom-fried-rice.controller.php',
    '/recipes/nuttys-braised-steak' => __DIR__  . '/recipes/nuttys-braised-steak.controller.php',
    '/recipes/onionsauce' => __DIR__  . '/recipes/onionsauce.controller.php',
    '/recipes/parsley-sauce' => __DIR__  . '/recipes/parsley-sauce.controller.php',
    '/recipes/pear-coconut-blackberry-cake' => __DIR__  . '/recipes/pear-coconut-blackberry-cake.controller.php',
    '/recipes/pearalmondtart' => __DIR__  . '/recipes/pearalmondtart.controller.php',
    '/recipes/peri-peri-pork-steaks' => __DIR__  . '/recipes/peri-peri-pork-steaks.controller.php',
    '/recipes/pineapplepudding' => __DIR__  . '/recipes/pineapplepudding.controller.php',
    '/recipes/pork-blackbean-sauce-and-peppers' => __DIR__  . '/recipes/pork-blackbean-sauce-and-peppers.controller.php',
    '/recipes/pork-chilli' => __DIR__  . '/recipes/pork-chilli.controller.php',
    '/recipes/pork-fried-rice' => __DIR__  . '/recipes/pork-fried-rice.controller.php',
    '/recipes/pork-madras' => __DIR__  . '/recipes/pork-madras.controller.php',
    '/recipes/pork-vindaloo' => __DIR__  . '/recipes/pork-vindaloo.controller.php',
    '/recipes/porksupreme' => __DIR__  . '/recipes/porksupreme.controller.php',
    '/recipes/quiche-lorraine' => __DIR__  . '/recipes/quiche-lorraine.controller.php',
    '/recipes/roast-pork-stroganoff' => __DIR__  . '/recipes/roast-pork-stroganoff.controller.php',
    '/recipes/roastporkvindaloo' => __DIR__  . '/recipes/roastporkvindaloo.controller.php',
    '/recipes/rogan-josh-beef-curry' => __DIR__  . '/recipes/rogan-josh-beef-curry.controller.php',
    '/recipes/rogan-josh-pork-curry' => __DIR__  . '/recipes/rogan-josh-pork-curry.controller.php',
    '/recipes/saffron-and-cardamom-rice' => __DIR__  . '/recipes/saffron-and-cardamom-rice.controller.php',
    '/recipes/sambar' => __DIR__  . '/recipes/sambar.controller.php',
    '/recipes/sausage-pasta-sauce' => __DIR__  . '/recipes/sausage-pasta-sauce.controller.php',
    '/recipes/sausage-roll-and-caramalised-onion' => __DIR__  . '/recipes/sausage-roll-and-caramalised-onion.controller.php',
    '/recipes/sausagecasserole' => __DIR__  . '/recipes/sausagecasserole.controller.php',
    '/recipes/sausageonionpie' => __DIR__  . '/recipes/sausageonionpie.controller.php',
    '/recipes/sausagepasta' => __DIR__  . '/recipes/sausagepasta.controller.php',
    '/recipes/sausagepepperpie' => __DIR__  . '/recipes/sausagepepperpie.controller.php',
    '/recipes/savoury-mince-and-mash' => __DIR__  . '/recipes/savoury-mince-and-mash.controller.php',
    '/recipes/smoked-haddock-bacon-bake' => __DIR__  . '/recipes/smoked-haddock-bacon-bake.controller.php',
    '/recipes/smoked-haddock-in-cheese-sauce' => __DIR__  . '/recipes/smoked-haddock-in-cheese-sauce.controller.php',
    // '/recipes/special-fried-rice' => __DIR__  . '/recipes/special-fried-rice.controller.php',
    '/recipes/spicy-baked-beans-and-peppers' => __DIR__  . '/recipes/spicy-baked-beans-and-peppers.controller.php',
    '/recipes/spicy-balti-potatoes' => __DIR__  . '/recipes/spicy-balti-potatoes.controller.php',
    '/recipes/spicy-masala-chicken' => __DIR__  . '/recipes/spicy-masala-chicken.controller.php',
    '/recipes/spicy-potato-wedges' => __DIR__  . '/recipes/spicy-potato-wedges.controller.php',
    '/recipes/spring-onion-chicken' => __DIR__  . '/recipes/spring-onion-chicken.controller.php',
    '/recipes/steak-and-ale-pie' => __DIR__  . '/recipes/steak-and-ale-pie.controller.php',
    '/recipes/steamed-sponge-pudding' => __DIR__  . '/recipes/steamed-sponge-pudding.controller.php',
    '/recipes/sweet-and-sour-pork' => __DIR__  . '/recipes/sweet-and-sour-pork.controller.php',
    '/recipes/sweet-and-sour-roast-chicken' => __DIR__  . '/recipes/sweet-and-sour-roast-chicken.controller.php',
    '/recipes/tandoori-chicken' => __DIR__  . '/recipes/tandoori-chicken.controller.php',
    '/recipes/tarka-dhal' => __DIR__  . '/recipes/tarka-dhal.controller.php',
    '/recipes/tomato-chutney' => __DIR__  . '/recipes/tomato-chutney.controller.php',
    '/recipes/tomatomexicanrice' => __DIR__  . '/recipes/tomatomexicanrice.controller.php',
    '/recipes/vegetarian-chilli' => __DIR__  . '/recipes/vegetarian-chilli.controller.php',
    '/recipes/victoria-sponge-cake' => __DIR__  . '/recipes/victoria-sponge-cake.controller.php',
    '/recipes/whitesauce' => __DIR__  . '/recipes/whitesauce.controller.php',
    // '/recipes/contact-form' => __DIR__  . '/recipes/contact-form.controller.php',
    '/terms' => __DIR__  . '/terms.controller.php',
    // '/recipes/google66a73f74d88ed190' => __DIR__  . '/recipes/google66a73f74d88ed190.controller.php',
    '/recipes/indian-sheperds-pie' => __DIR__  . '/recipes/indian-sheperds-pie.controller.php',
    '/recipes/pomegranate-chicken-curry-drumsticks' => __DIR__  . '/recipes/pomegranate-chicken-curry-drumsticks.controller.php',
    '/recipes/pomegranate-chicken-curry' => __DIR__  . '/recipes/pomegranate-chicken-curry.controller.php',
    // '/recipes/recipe-links-from-sitemap-BAKUP' => __DIR__  . '/recipes/recipe-links-from-sitemap-BAKUP.controller.php',
    // '/recipes/recipe-links' => __DIR__  . '/recipes/recipe-links.controller.php',
    // '/recipes/recipepage' => __DIR__  . '/recipes/recipepage.controller.php',
    // '/recipes/terms' => __DIR__  . '/recipes/terms.controller.php',
    // '/recipes/videotestpage' => __DIR__  . '/recipes/videotestpage.controller.php',












];

function routeToController($uri, $routes)
{
    // print_r($uri);
    // echo '<br>';
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } // if the URI begins with "/recipes/" but isn’t an exact match
    elseif (str_starts_with($uri, '/recipes/')) {
        // isolate the recipe name from the path
        $slug = basename($uri);
        $_GET['page'] = $slug;

        // use a shared controller to handle all individual recipe pages
        require __DIR__ . '/recipe-show.controller.php';
    } else {
        // http_response_code(404);
        // require __DIR__ . '/../views/404.php';
        require __DIR__ . '/recipes.controller.php';
    }
}

routeToController($uri, $routes);
