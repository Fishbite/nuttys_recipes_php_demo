<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?> | Nutty's Kitchen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <link rel="canonical" href="https://recipes.nuttyskitchen.co.uk/recipes">

    <!-- Load CSS first -->
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- Load fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Load logos -->
    <link rel="preload" href="/images/logo-left.svg" as="image">
    <link rel="preload" href="/images/logo-right.svg" as="image">
    <link rel="preload" href="/images/nuttys-kitchen-logo.svg" as="image">

    <!--set the image that shows in the browser tabs -->
    <link rel="icon" href="/images/icons/favicon.svg" />


    <!-- Critical CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .recipe-grid {
            min-height: 200px;
        }

        .back-to-top {
            position: sticky;
            top: 87.5vh;
            text-align: right;
            z-index: 100;
        }
    </style>
</head>


<body>
    <?php require __DIR__ . '/../views/partials/nav-main.view.php'; ?>

    <header class="title">

        <?php require __DIR__ . '/../views/partials/title-banner.view.php'; ?>

        <!-- <p>
            Browse through some delicious English dishes from recipes passed down
            through generations along with a delectable, scrumptious collection of
            Italian, Mexican, Chinese and Indian dishes that we hope will inspire
            you. We'll be testing, trialling and cooking lots more to share with you
            in the future. I hope you love what I have so far.
        </p>

        <p style="line-height: 1.6; font-size: 1rem">
            <span style="display: inline-flex; align-items: center; gap: 0.4em">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                    fill="hsl(209, 28%, 39%)" style="vertical-align: middle">
                    <path
                        d="M10 2a8 8 0 105.293 14.707l5 5 1.414-1.414-5-5A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
                </svg>

                <strong class="pencil">New Search!</strong>
            </span>

            <span style="margin-left: 0.5em">
                <em>search</em> by category, ingredient, or
                craving — just like flipping through Nutty’s personal cookbook!
            </span>
        </p>

        <p><strong>Been here before?</strong> Type the recipe name in the address bar:
            "/recipes/<strong>mushroom-chow-mein</strong>" and we'll take you
            straight to the recipe
            page @ <a class="underline-link" href="https://nuttyskitchen.co.uk/">nuttyskitchen.co.uk</a></p>

        <p>
            Drop me an email by clicking the
            <b><i>"mail me some love"</i></b> button below to let me know what you
            think - it would be fantastic to hear from you. Happy cooking!
        </p>
        <p>
            Use the other buttons below to jump to a specific category such as
            chicken, puddings etc.
        </p>

    </header>

    <div class="cta list-btn" title="email me :¬)">
        <a href="&#109;ailto&#58;nutty&#64;nuttyskitchen&#46;co&#46;uk">mail me some love<br />
            &#128522;</a>
    </div> -->

        <!-- <div id="target">Target</div> -->

        <?php require __DIR__ . '/../views/partials/category-btns.view.php'; ?>

        <?php require __DIR__ . '/../views/partials//back-to-top-btn.view.php'; ?>

        <!-- Search Form -->
        <form id="search-form" class="search-form" action="/recipes/" method="POST">
            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="all" <?= $searchCategory === 'all' ? 'selected' : ''; ?>>All
                    Categories</option>
                <?php foreach ($categories as $cat): ?>
                <option value="<?= htmlspecialchars($cat); ?>" <?= $cat === $searchCategory ? 'selected' : ''; ?>>
                    <?= htmlspecialchars(ucfirst($cat)); ?>
                </option>
                <?php endforeach; ?>
            </select>
            <label for="search">Keyword:</label>
            <input type="text" id="search" name="search" placeholder="Enter keyword..."
                value="<?= htmlspecialchars($searchTerm); ?>">
            <button type="submit">Search</button>
        </form>

        <!-- Recipe Grid -->
        <div class="recipe-grid">
            <?php
            if (!empty($groupedRecipes)) {
                foreach ($groupedRecipes as $catName => $recipesArray) {
                    $description = $categoryDescriptions[$catName] ?? '';
                    echo renderCategoryGrid($catName, $description, $recipesArray);
                }
            } else {
                echo "<p>No recipes found matching your criteria.</p>";
            }
    ?>
        </div>

        <?php require __DIR__ . '/../views/partials/footer.php'; ?>

        <script src="/scripts/scrollTo.js"></script>

        <!-- <script>
            function appendTargetToURL() {
                // Append #target to the form's action URL
                const form = document.getElementById('search-form');
                form.action += '#target';
            }

            document.addEventListener('DOMContentLoaded', () => {
                // Scroll to #target if the URL contains the fragment
                if (window.location.hash === '#target') {
                    const target = document.getElementById('target');
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        </script> -->

</body>

</html>