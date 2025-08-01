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
          Looking for a side dish that brings big flavour to humble new
          potatoes? Well, look no further...
          <strong>Spicy Balti Potatoes</strong>!
        </p>
        <p>
          I chose sliced salad potatoes for this dish because they hold their
          shape beautifully. First thing in the morning, I popped them into an
          electric steamer for 25 minutes, then left them to cool and dry out
          completely.
        </p>

        <p>
          In my usual Nutty way, I prep'ed all my spices — measuring them out,
          arranging them on a plate — then toodled off to the shops.
          (Priorities, right? 😆)
        </p>

        <p>
          When it was time to bring it all together, the hard work was already
          done. I simply sliced the onions & the garlic, chopped the chillies…
          and boom! Dinner was on the table in just 10 minutes.
        </p>

        <p>Flavour-packed, effortless, and absolutely delicious.</p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Spicy Balti Potatoes</strong> along with some pictures
          as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/spicy-balti-potatoes/650x366/spicy-balti-potatoes.webp"
            alt="spicy balti potatoes"
            title="spicy balti potatoes"
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
                <li>10 new potatoes sliced into 1/2 cm discs</li>
                <li>3 Tbls vegetable oil</li>
                <li>1/2 tsp cumin seeds</li>
                <li>10 frozen curry leaves*</li>
                <li>1 tsp crushed dried red chilli's</li>
                <li>1 tsp salt</li>
                <li>1/2 tsp nigella seeds (onion)</li>
                <li>1/2 tsp brown mustard seeds</li>
                <li>1/2 tsp fenegreek seeds</li>
                <li>1/2 tsp fennel seeds</li>
                <li>5 cloves garlic</li>
                <li>2 white onions sliced</li>
                <li>2 red onions sliced</li>
                <li>1 Tbls fresh or frozen coriander chopped</li>
                <li>1 fresh red chilli chopped into disc's</li>
                <li>1 green chilli chopped into disc's</li>
              </ul>

              <div class="spacer"></div>

              <p>
                *I keep my fresh curry leaves in the freezer. I do not use dried
                as they are unpleasent in texture and deliver very little
                flavour! But if that is what you have add them with the initial
                spices
              </p>

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
                First, slice the potatoes into even sized discs. Take your
                time—if they’re uneven, they won’t cook evenly! Next, cook or
                steam them for 25 minutes. Meanwhile, I set out my spices, and
                we’ll be ready to cook later. Once the potatoes have dried
                completely
              </p>

              <p>In my usual way, I get everything ready and prepared:</p>

              <div class="card_image">
                <figcaption>slice the onions & steam the potaotes</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/sliced-onions-and-potatoes.webp"
                  alt="sliced onions and potatoes"
                  title="sliced onions and potatoes for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>prepare the spices</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/prepared-spices.webp"
                  alt="prepared spices"
                  title="prepared spices for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  Heat a heavy based pan add oil. Once shimmering hot add your
                  prepared spices 1/2 tsp cumin seeds, 10 frozen curry leaves, 1
                  tsp crushed dried red chilli's, 1 tsp salt, 1/2 tsp nigella
                  seeds (onion), 1/2 tsp brown mustard seeds, 1/2 tsp fenegreek
                  seeds & 1/2 tsp fennel seeds, stir to combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry the spices & curry leaves</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/seeds-and-leaves-frying.webp"
                  alt="seeds and leaves frying"
                  title="seeds and leaves frying for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  as soon as they sizzle add your garlic cloves & brown slightly
                  stir to combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown the garlic slightly</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/garlic-added-to-frying-seeds.webp"
                  alt="garlic added to frying seeds"
                  title="garlic added to frying seeds for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>
                  add all your onions & again allow them to brown slightly stir
                  occassionally
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add onions</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/sliced-onions-in-a-wok.webp"
                  alt="sliced onions in a wok"
                  title="sliced onions in a wok for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>stir occasionally</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/onions-frying-in-a-wok.webp"
                  alt="onions frying in a wok"
                  title="onions frying in a wok for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>add sliced red & green chillies</li>
              </ol>

              <div class="card_image">
                <figcaption>add chillies</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/sliced-chillies-with-frying-onions.webp"
                  alt="onion chillies seeds frying"
                  title="onion chillies seeds frying for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>add coriander and stir to combine</li>
              </ol>

              <div class="card_image">
                <figcaption>add coriander & stir</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/onion-chillies-seeds-frying.webp"
                  alt="onion chillies seeds frying"
                  title="onion chillies seeds frying for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>once browned add your 10 sliced dry cooked potatoes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add potatoes</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/sliced-potatoes-added-to-wok.webp"
                  alt="sliced potatoes added to wok"
                  title="sliced potatoes added to wok for spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>soon as it is hot it's ready to serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>fry until hot</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/spicy-balti-potatoes-frying.webp"
                  alt="spicy balti potatoes frying"
                  title="spicy balti potatoes frying"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>transfer to a serving dish</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/spicy-balti-potatoes.webp"
                  alt="spicy balti potatoes"
                  title="spicy balti potatoes"
                />
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion for:</h2>
              <p>
                <strong>Spicy Balti Potatoes</strong> served alongside chicken
                tandoori grill and masala vegetables with fresh fenugreek.
              </p>

              <div class="card_image">
                <figcaption>tandoori grilled chicken</figcaption>
                <img
                  src="/images/spicy-balti-potatoes/650x366/indian-dinner-on-a-plate.webp"
                  alt="indian dinner on a plate"
                  title="indian dinner on a plate with spicy balti potatoes"
                />
                <figcaption>with spicy balti potatoes & masala veg</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Spicy Balti Potatoes</strong> for any night of the week,
                on it's own or paired with perfect partners. This is a Nutty's
                style mid-week dinner ;-)
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
                    href="https://www.nuttyskitchen.co.uk/karahi-chicken-curry.html"
                    >karahi chicken curry
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chicken-thighs-in-spicy-hot-sauce.html"
                    class="underline"
                    >chicken thighs in spicy hot sauce
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