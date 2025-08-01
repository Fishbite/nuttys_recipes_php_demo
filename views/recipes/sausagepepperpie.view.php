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
          A beautifully savoury mash covered family pleaser in a lovely rich
          sauce with sausage, onions & bell peppers
        </p>
        <p>
          The ingredients of this are very similar to the sausage & pepper
          casserole except here we use a tin of tomato soup instead of beans and
          tomatoes. Take a look at the method for full details
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
            src="/images/sausagepepperpie/650x366/sausageandpepperpie03.webp"
            alt="sausage and pepper pie"
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
              <h2>serves 4</h2>
              <ul>
                <li>1 pack sausages, skinned & cut into 3 pieces</li>
                <li>1 white onion, sliced</li>
                <li>3 cloves of garlic, finely chopped</li>
                <li>1 tsp dried mixed herbs</li>
                <li>1/2 tsp dried oregano</li>
                <li>
                  1 tin of tomato soup (cheapest 440ml tin you can buy will do!)
                </li>
                <li>1 veg stock cube</li>
                <li>1 Tbls tomato puree</li>
                <li>1 - 2 tsp Worcestershire Sauce</li>
                <li>1 red, yellow & green bell pepper, 2.5cm cubes</li>
                <li>salt & pepper for seasoning</li>
                <li>mashed potato to finish</li>
              </ul>
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                The ingredients of this are very similar to the sausage & pepper
                casserole except here we use a tin of tomato soup instead of
                beans and tomatoes. We also keep the peppers a little crispier
                because we'll finish the dish in the oven to give the mash a
                wonderful golden crispy toasted finish.
              </p>

              <ol class="card_text">
                <li>Pre-heat large pan / wok</li>
                <li>Add sausage to the pan & brown all over</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>brown sausages</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/sausageinpan-1.webp"
                  alt="sausage in a pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Add onions, fry for 5mins</li>

                <li>Add salt, pepper, mixed herbs & oregano</li>
                <li>Crumble in veg stock cube</li>
                <li>Add peppers, cook for 5 mins, leave them crunchy</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add peppers</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/sausageandpepperpie02.webp"
                  alt="sausage in a pan"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Add tomato puree, Worcestershire sauce, tomato soup</li>
                <li>Cover & simmer for about 10mins</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>sausage & pepper pie mix</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/sausageandpepperpie03.webp"
                  alt="sausage and pepper pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  Transfer to a deep casserole dish and cover with mashed potato
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sausage & pepper pie covered with mash</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/sausagepeppermashpie.webp"
                  alt="Sausage pepper mash pie"
                />
                <figcaption>
                  Brown while still hot in pre-heated oven (180c) approx
                  30-45mins
                </figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>sausage & pepper pie</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/sausagepeppermashpie-01.webp"
                  alt="Sausage pepper mash pie"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Alternatively, you can brown the mash under a med-hot grill for
                about 15mins while the ingredients are still hot
              </p>
              <p>
                If browning from fridge-cold, bake in a pre-heated oven 180c for
                45 mins
              </p>

              <div class="card_image_round">
                <figcaption>sausage & pepper pie</figcaption>
                <img
                  src="/images/sausagepepperpie/650x366/dinner-plated-01.webp"
                  alt="dinner plated"
                />
                <figcaption>serve to please!</figcaption>
              </div>
              <div class="spacer"></div>
            </div>
            <!-- end of single item -->
          </article>
        </article>
      </div>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>