<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          I hope you're ready for a divine treat today as I bring you this
          wonderful chorizo based dish. We absolutely loved it here at Nutty's
          kitchen, so much so, we had it two days on the trot with not a single
          morsel wasted!
        </p>
        <p>
          Baked <strong>Cod & Chorizo Stew</strong> is a gorgeous Spanish dish
          that is just so wonderfully tasty, really easy to make and completely
          scrumptious. The unique combination of savory, smokey, spicy flavours
          of the chorizo along with the aromatic fragrances of garlic, pepper
          and paprika permeate through the whole dish (and your kitchen!) making
          it a complete taste sensation that will please and satisfy any
          appetite. For a light bite in summer, eat with shredded iceberg
          lettuce warmed through the sauce and which ever bread you choose or
          have. On grey days or in the winter time, serve with creamy mashed
          potatoes to make this a dish of pure indulgent heaven! The starchy,
          creamy butteriness of the mash really lifts the flavour of the cod and
          makes the dish delightfully satisfying.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make baked <strong>Cod & Chorizo Stew</strong> along with a few
          pictures for reference :-)
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chorizo-cod/650x366/chorizo-cod-stew-plated-04.webp"
            alt="chorizo cod stew plated 04"
            title="baked chorizo cod stew served with finely shredded iceberg lettuce"
          />
        </article>

        <article class="about">
          <!-- buttons container -->
          <div class="btn-container">
            <!-- class active = show content -->
            <button
              title="Click this tab to reveal the ingredients"
              class="tab-btn active"
              data-id="ingredients"
            >
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

          <!-- This is where the "Ingredients" & "Method" tabs are created -->
          <!-- about content -->
          <article class="about-content">
            <!-- single item -->

            <!-- the class `active` is applied to show the contents of the tab. "Ingredients" is active by default -->
            <div class="content active" id="ingredients">
              <h2>ingredients</h2>
              <p>Here's what you need :¬)</p>

              <!-- Ingredients List Goes Below Here!!! -->
              <h2>serves 4</h2>
              <ul>
                <li>400g frozen cod</li>
                <li>200g spicy chorizo sausage sliced</li>
                <li>1 onion diced</li>
                <li>2 sticks celery diced</li>
                <li>1 red pepper diced</li>
                <li>1 Tbsp fennel seeds</li>
                <li>1 Tbsp garlic paste</li>
                <li>400g 1 tin cannellini beans or butter beans</li>
                <li>400g 1 tin plum tomatoes mashed</li>
                <li>1 OXO&trade; veg stock cube crumbled</li>
                <li>salt and pepper ground in stages</li>
                <li>2 Tbsp olive oil</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->
            <!-- The method tab  does not have the call `active` by default, thus it is hidden from view. When the user clicks
            the "Method" tab the `active` class is applied here and
            removed from the "Ingredients" tab, which is then hidden
            from view
             -->
            <div class="content" id="method">
              <h2>method</h2>
              <p>
                As always, chop & prepare everything. Leave your cod in the
                freezer until you're ready to set the dish into the oven.
              </p>
              <p>
                Be sure to season each layer of vegetables with a little salt &
                pepper as you add them to the pan and don't forget to season
                your fish on both sides! I used a pointy sweet red pepper &
                cannellini beans but you could use butter beans if you prefer.
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for baked chorizo cod stew"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  Heat a heavy based pan, add your chorizo, crisp it up & let
                  the oils release
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry the sliced chorizo</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/chorizo-frying.webp"
                  alt="chorizo frying"
                  title="chorizo frying for baked chorizo cod stew"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>Preheat your oven to 180c</li>
                <li>
                  Add the onions when the chorizo is crispy and the oils have
                  been released
                </li>
                <li>Stir through & add celery</li>
                <li>Stir through & add peppers</li>
                <li>
                  Push everything aside in the pan, add fennel seeds & garlic
                </li>
                <li>Crumble your stock cube into your tinned tomatoes</li>

                <li>
                  Add your tinned tomatoes, veg stock cube & rinsed cannellini
                  beans
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add tomatoes</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/tomatoes-added.webp"
                  alt="tomatoes added"
                  title="tomatoes added to make baked chorizo cod stew"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cannellini beans</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/cannellini-beans-added.webp"
                  alt="cannellini beans added"
                  title="cannellini beans added to baked chorizo cod stew"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>stir through</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/cannellini-beans-added-01.webp"
                  alt="cannellini beans added 01"
                  title="cannellini beans stirred into baked chorizo cod stew"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  Bring everything to simmer, then get a shallow oven dish & set
                  the mixture in it
                </li>
                <li>
                  Get your frozen fish, season each side & push it down into the
                  dish
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>season the cod</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/frozen-cod-fillets-02.webp"
                  alt="frozen cod fillets"
                  title="seasoned frozen cod fillets for baked chorizo cod stew"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>push the cod into the stew</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/cod-filets-added-to-baking-dish-01.webp"
                  alt="cod fillets added to baking dish 01"
                  title="cod fillets added to baked chorizo cod stew"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>Drizzle with olive oil</li>
                <li>
                  Bake for 25 to 35 minutes &mdash; be guided by the pack of
                  fish!
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                Please remember we are adding it to a hot stew base so the
                timings may vary slightly &mdash; check the fish after 25 mins.
              </p>

              <div class="card_image">
                <figcaption>bake in the oven until the fish is done</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/chorizo-cod-stew-baked.webp"
                  alt="chorizo cod stew baked"
                  title="baked chorizo cod stew straight out of the oven"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Baked <strong>Cod & Chorizo Stew</strong>: serve with creamy
                mashed potatoes or, finely sliced iceberg lettuce & pitta bread.
              </p>

              <div class="card_image_round">
                <figcaption>baked chorizo cod stew</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/chorizo-cod-stew-plated-04.webp"
                  alt="baked chorizo cod stew plated 04"
                  title="baked chorizo cod stew served with finely shredded iceberg lettuce"
                />
                <figcaption>with iceberg lettuce</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Shredded iceberg lettuce warmed through the sauce makes for a
                delicious light meal when you don't want something too heavy.
              </p>

              <div class="card_image_round">
                <figcaption>baked chorizo cod stew</figcaption>
                <img
                  src="/images/chorizo-cod/650x366/chorizo-cod-stew-plated-05.webp"
                  alt="baked chorizo cod stew plated 05"
                  title="baked chorizo cod stew served with finely creamy mashed potatoes"
                />
                <figcaption>with creamy mashed potatoes</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Served with buttery, creamy mashed potatoes makes for the most
                indulgently tasty comfort food you can imagine.
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't fuk with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/fluffy-mashed-potatoes"
                    >fluffy mashed potatoes
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/fish-and-chorizo-potato-pie.html"
                    class="underline"
                    >fish & chorizo potato pie
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