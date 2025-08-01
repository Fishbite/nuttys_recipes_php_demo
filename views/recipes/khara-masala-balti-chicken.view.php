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
          Summer is here and its <em>'el scorchio'</em> at the moment, so here's
          a really quick and easy recipe that cooks in just a few mintues
          &mdash; <strong>Khara Masala Balti Chicken</strong>. They call it a
          <em>dry curry</em>, but to me, its only a curry if it has gravy! This
          is a lightly spiced <em>stir-fry</em> dish that you can give as much,
          or little, chilli kick as you please. Once you've fried off your
          spices and onions the chicken only takes around five minutes to cook
          and you are ready to serve! Just enough time to knock up the salad to
          serve with it.
        </p>
        <p>No standing around in a baking hot kitchen. Yeah!</p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide with
          pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/khara-masala-balti-chicken/650x366/khara-masala-balti-chicken-plated-03.webp"
            alt="khara masala balti chicken plated 03"
            title="khara masala balti chicken with naan & salad"
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

              <h3>For the spice mix</h3>
              <h3>serves 4</h3>

              <ul>
                <li>1 tsp pomegranate seeds crushed</li>
                <li>1 tsp sea salt crushed</li>
                <li>1 tsp red chilli flakes crushed</li>
              </ul>

              <div class="spacer"></div>

              <p>
                Put all the above in a pestle & mortar to crush them down then
                add the ingredients below to create your spice mix
              </p>

              <ul>
                <li>1/4 tsp mustard seeds</li>
                <li>1/4 tsp fennel seeds</li>
                <li>1/4 tsp onion seeds</li>
                <li>1/4 fenegreek seeds</li>
                <li>1/2 tsp cumin seeds</li>
                <li>2.5cm grated ginger</li>
                <li>5 garlic cloves sliced</li>
                <li>12 dried curry leaves</li>
              </ul>

              <div class="spacer"></div>

              <h3>For the curry</h3>
              <ul>
                <li>4 Tbsp veg oil</li>
                <li>4 fresh green chillies slit in 4 & halved</li>
                <li>1 large onion sliced</li>
                <li>1 medium tomatoes sliced</li>
                <li>675g diced chicken</li>
                <li>1 Tbsp of coriander</li>
              </ul>
              <!-- Ingredients List Goes Above Here!!! -->
            </div>
            <!-- end of single item -->

            <!-- single item -->

            <div class="content" id="method">
              <h2>method</h2>
              <p>
                So, here's a quick one for you to put together in the heat of
                summer when you don't want to be slave to the kitchen.
              </p>
              <p>
                Just create the spice mix and prep the other ingredients to
                cook, it'll take you 5 to ten minutes and you're ready to go!
              </p>

              <div class="card_image">
                <figcaption>spices</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/spice-ingredients-01.webp"
                  alt="spice ingredients for khara masal balti chicken"
                  title="spice ingredients for khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>spices ready for frying</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/spices-for-frying-in-mortar-02.webp"
                  alt="spices for frying for khara masal balti chicken"
                  title="spices for frying in oil for khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>ingredients for curry</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/ingredients-for-kahra-masala-chicken-01.webp"
                  alt="ingredients for khara masal balti chicken"
                  title="ingredients for khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  mix all of your spices for the spice mix together then add the
                  garlic and ginger
                </li>
                <li>now heat a heavy based pan add the oil</li>
                <li>add in your spice mix and the green chillies</li>
                <li>
                  stir for just a minute until the spices smell and add in
                  onions
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add onions to the spices</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/onions-frying-with-spices.webp"
                  alt="onions frying with spice"
                  title="onions frying with spice for khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>
                  cook for appoximately 5 minutes to 7 minutes try to turn
                  slightly rather than rushing & stiring too much
                </li>
                <li>
                  now add in your chicken & tomatoes, stir-fry over a medium
                  heat for 7 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add diced chicken & tomatoes</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/chicken-added-01.webp"
                  alt="chicken added 01"
                  title="chicken added to make khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  the chicken should now be cooked through and the sauce reduced
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>chicken cooked</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/chicken-cooked-01.webp"
                  alt="chicken cooked 01"
                  title="chicken cooked for khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  stir fry everything together for another 3 to 5 minutes and
                  add a final florish of fresh corriander
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add some chopped coriander</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/coriander-added-01.webp"
                  alt="coriander added 01"
                  title="coriander added to khara masal balti chicken"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>khara masala balti chicken</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/khara-masala-balti-chicken-in-glass-dish-03.webp"
                  alt="khara masal balti chicken in glass dish"
                  title="khara masal balti chicken ready to serve"
                />
                <figcaption>ready for the table!</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/khara-masala-balti-chicken/650x366/khara-masala-balti-chicken-plated-03.webp"
                  alt="khara masala balti chicken plated"
                  title="khara masala balti chicken with salad & naan"
                />
                <figcaption>salad & naan stuffed with curry!</figcaption>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Above Here!!! -->

              <p>
                Now I would eat this on a picnic, cold from a pot, or, in a
                pitta bread hot, or even traditional white english bread! Or,
                just stone cold on a fridge raid @ 2 am as some people do in my
                house!!! It's a tempting snack and a meal, all in one dish :¬)
              </p>

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
                    href="https://www.nuttyskitchen.co.uk/dodgy-kebab.html"
                    >dodgy kebab
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/tarka-dhal.html"
                    class="underline"
                    >tarka dhal
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