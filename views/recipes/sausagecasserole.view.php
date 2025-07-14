<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section>
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <p>
          Love sausage & baked beans? Trust me, you're gonna love this one! It's
          a warming home-style casserole with loads of sauce. Serve simply with
          a fresh crusty buttered baguette, or, make some creamy mashed potato
          for a cold winter's night feast
        </p>
        <p>
          Click the <b>Method</b> tab below to see a step by step guide with
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <article class="about-img">
          <img
            src="/images/sausagecasserole/650x366/sausagecasserole.jpg"
            alt="sausage casserole"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button class="tab-btn active" data-id="ingredients">
              ingredients
            </button>
            <button
              title="Click this tab to read the recipe method and see pictures of how to make this dish"
              class="tab-btn"
              data-id="method"
            >
              method
            </button>
          </div>
          <!-- about content -->
          <article class="about-content">
            <!-- single item -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>
              <h2>serves 4 - 6</h2>
              <ul>
                <li>1 pack sausages, skinned & cut into 3 pieces</li>
                <li>2 red onions, sliced</li>
                <li>2 medium carrots, grated</li>
                <li>2 sticks of celery, sliced</li>
                <li>3 cloves of garlic, finely chopped</li>
                <li>1tsp dried mixed herbs</li>
                <li>1/2 tsp dried oregano</li>
                <li>1 440ml of tinned chopped tomatoes</li>
                <li>1 440ml of tinned baked beans</li>
                <li>1 veg stock cube</li>
                <li>1 - 2 tsp Worcestershire sauce</li>
                <li>1/2 red, yellow & green pepper, sliced</li>
                <li>salt & pepper for seasoning</li>
                <li>sprinkle of fresh marjoram</li>
              </ul>
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>

              <ol class="card_text">
                <li>Pre-heat large pan / wok</li>
                <li>Add sausage to the pan & brown all over</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>brown sausages</figcaption>
                <img
                  src="/images/sausagecasserole/650x366/sausageinpan.jpg"
                  alt="sausage in a pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Add onions, fry for 5mins</li>
                <li>Add carrots, fry for 5mins</li>
                <li>Add celery & garlic, fry for 5mins</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add veg</figcaption>
                <img
                  src="/images/sausagecasserole/650x366/suasageandveginpan.jpg"
                  alt="Sausage and veg In Pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Add salt, pepper, mixed herbs & oregano</li>
                <li>Crumble in veg stock cube</li>
                <li>Add tomato puree, Worcestershire sauce, tomatoes</li>
                <li>Add beans & stir gently</li>
                <li>Cover & simmer for about 10mins</li>
                <li>Add sliced peppers</li>
                <li>Cover and simmer until peppers are soft as you like</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add peppers</figcaption>
                <img
                  src="/images/sausagecasserole/650x366/sausagecasserolewithpeppers.jpg"
                  alt="Sausage Casserole In Pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>Sprinkle with fresh marjoram or thyme to serve</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>sausage casserole</figcaption>
                <img
                  src="/images/sausagecasserole/650x366/sausagecasserole.jpg"
                  alt="Sausage Casserole In Pan"
                />
                <figcaption>
                  serve with warm buttered baguette or mash
                </figcaption>
              </div>
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/sausage-pasta-sauce.html"
                    >sausage pasta sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/spicy-baked-beans-and-peppers.html"
                    class="underline"
                    >spicy baked beans & peppers
                  </a>
                </li>
              </ul>
            </section>
          </article>
        </article>
      </div>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>