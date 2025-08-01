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
          <strong>Chicken with Mango</strong> Do not dismiss fruit from curry's,
          it is a staple all over the world. Adding any fruits including mango
          will tenderise your chicken within minutes. The little addition of
          another layer of mango cubes, freshly chopped tomatoes and green
          chillies are delightful. The hardest bit of this curry is pealing and
          slicing the mango. Slippery little buggers! Do it over a deep dish to
          reserve all those juices to tenderise your meat. This is in no way a
          sweet or indeed hot dish, the balance of spices and fresh juicy
          sweetness are a perfect match for each other.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make <strong>Chicken with Mango</strong> along with a few pictures
          for guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/chicken-with-mango/650x366/chicken-with-mango-cooked.webp"
            alt="chicken with mango cooked"
            title="chicken with mango cooked and ready to serve"
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
              <h2>(serves 4)</h2>

              <h2>for the spice paste / marinade</h2>

              <ul>
                <li>2 tsp garlic pulp</li>
                <li>2 tsp ginger pulp</li>
                <li>1 tsp hot chilli powder</li>
                <li>2 tsp kashmiri chilli powder</li>
                <li>1/2 tsp turmeric powder</li>
                <li>1 tsp sea salt</li>
                <li>1 tsp ground coriander</li>
              </ul>

              <div class="spacer"></div>
              <ul>
                <li>1/2 tsp onion seeds - to be added whole, NOT ground</li>
                <li>1/2 fresh green mango diced</li>
                <li>450g diced chicken thighs</li>
              </ul>

              <div class="spacer"></div>

              <h2>to cook with</h2>

              <ul>
                <li>2 Tbsp vegetable oil</li>
                <li>2 medium onions thickly sliced</li>
                <li>1/2 fresh green mango diced</li>
                <li>8 to 10 Curry leaves</li>
                <li>300ml water</li>
                <li>2 large tomatoes sliced</li>
                <li>2 fresh green chillies sliced</li>
                <li>2 Tbsp fresh coriander</li>
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
                Now, the mango needs peeling throughly, the skins are tough and
                will ruin your quick cook curry instantly! So peel it over a
                dish so as not to lose the juices. Look for signs of the stone
                and cut arround the edge. Then slip your knife into the edge.
                Now, I tend to use my fingers to try and slip the stone out.
                Then once you have the stone, take a small knife and skim off
                any remaining flesh. First time &mdash; knightmare! But, once
                you get to know this fruit you will learn to love it :-)
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>my ingredients ready to roll</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for chicken with mango layed out on a board"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  So the mango challenge is done, now split it into two, as half
                  is for the marinade & the rest will be added right at the end
                  of the curry
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chopped mango</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chopped mango.webp"
                  alt="chopped mango"
                  title="chopped mango for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  Now lets work on the spices, it's easy! Grind any whole spices
                  you have like coriander with sea salt, it helps break the
                  seeds down. Keep the onion seeds whole
                </li>
                <li>
                  Combine freshly ground coriander & salt with the other ground
                  spices, onion seeds then add garlic paste & ginger
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spice paste for marinade</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/spice-mix-in-a-mortar.webp"
                  alt="spice mix in a mortar"
                  title="spice mix in a mortar for chicken with mango marinade"
                />
              </div>
              <div class="spacer"></div>

              <ol start="4">
                <li>
                  Dice your chicken, combine the mango, spice mix & chicken
                </li>
                <li>
                  Set this aside into the fridge to marinate &mdash; just while
                  you do the dreaded browning onions "Shakes head"
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken in mango marinade</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chicken-marinating-in-a-dish.webp"
                  alt="chicken marinating in a dish"
                  title="chicken marinating in a dish for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  Heat a heavy based pan, add the oil, once hot reduce the heat
                  & add curry leaves & sliced onions
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sliced onions & curry leaves</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/onions-and-curry-leaves-frying.webp"
                  alt="onions and curry leaves frying"
                  title="onions and curry leaves frying for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  And yes wait wait, wait.. wait! When brownish add the curry
                  leaves & stir fry gently
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>onions browned</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/onions-browned.webp"
                  alt="onions browned"
                  title="onions browned for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  Now add a tablespoon or two of your chicken mixture,
                  gradually! Try not to rush this stage please*
                </li>
              </ol>

              <p>
                *If you chuck it all in at once it will boil. We want it to fry
                each side of the chicken and this requires some patience, I fry
                mine in about 50g batches
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken added in small batches</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chicken-added-to-onions.webp"
                  alt="chicken added to onions"
                  title="chicken added to onions for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  Once each batch looks white & it all looks, well stir fried
                  through the mango & onions, add the next batch until all the
                  chicken is cooked
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>all the chicken is sealed</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chicken-all-cooked.webp"
                  alt="chicken all cooked"
                  title="chicken all cooked for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  Now we add water just, to cover the chicken, I say 300ml but I
                  can not see your pan, just cover the meat
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add water</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/water-added-to-chicken.webp"
                  alt="water added to chicken"
                  title="water added to chicken to make the sauce for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>
                  Now let it cook for 10 to 15 minutes with out a lid! We want
                  it to dry out so when we add our next stage it's a thick sauce
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>sauce reduced</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/sauce-reduced-in-pan.webp"
                  alt="sauce reduced in pan"
                  title="sauce reduced in pan for chicken with mango curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>
                  Now add your tomatoes, reserved mango cubes, green chilli
                  slices & fresh or frozen corriander
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add the fresh ingredients</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/fresh-ingredients-added-to-curry.webp"
                  alt="fresh ingredients added to curry"
                  title="fresh ingredients added to curry for chicken with mango"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>Cover for 5 minutes to allow the dish to reheat & serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken with mango ready to serve</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chicken-with-mango-cooked.webp"
                  alt="chicken with mango cooked"
                  title="chicken with mango cooked and ready to serve"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Its great to serve this dish simply with plain basmati rice as
                its delicate flavour doesn't interfere with the vibrant tangy
                tastes of this magnificant curry..
              </p>

              <p>
                I hear many people say they don't like curry, and that's
                probably because they maybe never cooked or controled a curry
                the way you can when you make it yourself. They are so diverse,
                so, step into Nutty's Kitchen rather than picking up the phone
                for a gloopy / greasy take away that you have no idea how it was
                made.
              </p>

              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/chicken-with-mango/650x366/chicken-with-mango-plated-01.webp"
                  alt="chicken with mango plated 01"
                  title="chicken with mango plated with plain basmati rice"
                />
                <figcaption>Chicken with mango & basmati rice</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Chicken with Mango</strong> Served with basmati rice &
                and a massive smile &mdash; where's my spoon please!?
              </p>

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
            </div>
            <!-- end of single item -->

            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/chicken-in-cashew-nut-sauce.html"
                    >chicken in cashew nut sauce
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/basmati-rice.html"
                    class="underline"
                    >basmati rice
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