<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <section class="fg">
      <header class="title">
        <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

        <!-- First paragraph after the page title -->
        <p>
          If you're looking for a simple and quick side dish to complement
          grilled meat, this
          <strong>Masala Vegetable with Fresh Fenugreek</strong> is the perfect
          choice. It's also a fantastic standalone dish for a light, flavorful
          meal. The delicate blend of spices makes it a great pairing with
          chapati or any flatbread. Here I’ve served it alongside my Tandoori
          Chicken Grill recipe, using chicken breast to accommodate my guests.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Masala Vegetable with Fresh Fenugreek</strong> along
          with some pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-veg-with-fresh-fenugreek.webp"
            alt="masala veg with fresh fenugreek"
            title="masala veg with fresh fenugreek in a serving dish"
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
                <li>1/2 a medium cauliflower broken down into florettes</li>
                <li>100g green beans cut into 3cm pieces</li>
                <li>2 small onions peeled & roughly chopped</li>
                <li>1 tsp ground cumin</li>
                <li>1 tsp ground coriander</li>
                <li>1 tsp sesame seeds</li>
                <li>1 tsp extra hot chilli powder</li>
                <li>1 tsp garlic pulp</li>
                <li>1/4 tsp turmeric</li>
                <li>1 tsp table salt</li>
                <li>1 Tbsp vegetable oil</li>
                <li>1 tomato cut into 8</li>
                <li>1 bunch fresh fenegreek leaves*</li>
                <li>4 Tbsp chopped fresh coriander</li>
                <li>1 Tbsp lemon juice</li>
              </ul>

              <div class="spacer"></div>

              <p>
                *You will need to pick every leaf off the stalks of fenegreek &
                discard the storks, unlike coriander you can not use all of it.
                This herb can be found in reputable Indian & Chinese shops
                usually around early spring in the UK.
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
                Start this recipe in the morning using an electric steamer.
                Place the cauliflower in the bottom layer and the beans in the
                top layer. Steam for 27 minutes*** until just tender, then
                immediately transfer them to ice-cold water. Once cooled, drain
                and set aside until completely dry. Ideally, let them air dry
                until the evening, but if needed, pat them dry with a teatowel
                before use.
              </p>

              <p>
                <strong>***Note:</strong> Just steam the cauliflower until its
                cooked to your liking as it's not going to soften much more when
                you prepare the final dish. Timing just depends on the cauli'
                and your steamer!
              </p>

              <p>
                To make life easier on myself I prepare and get everything ready
                in advance. This makes the cooking process much more enjoyable
                and less stressful. I also find that I can concentrate on the
                aroma's and enjoy the experience:
              </p>

              <div class="card_image">
                <figure>
                  <figcaption>ingredients</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/ingredients.webp"
                    alt="ingredients"
                    title="ingredients for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figure>
                  <figcaption>...and part cooked cauli & beans</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/cauliflower-and-green-beans.webp"
                    alt="ingredients"
                    title="ingredients for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  Roughly chop both onions and measure your spices:- 1 tsp
                  ground cumin, 1 tsp ground coriander, 1 tsp sesame seeds, 1
                  tsp extra hot chilli powder, 1 tsp garlic pulp, 1/4 tsp
                  turmeric & 1 tsp table salt
                </li>
                <li>
                  Now place everything into a mini chopper bowl or blender and
                  blitz until a paste forms
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>blitz until a paste forms</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-paste.webp"
                    alt="masala paste"
                    title="masala paste for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>Heat a large sauce pan and add 2 Tablespoons of oil</li>
                <li>
                  Once it shimmers add your paste - stir occassionally for
                  roughly 5 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>add masala to hot oil</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-paste-in-hot-oil.webp"
                    alt="masala paste in hot oil"
                    title="masala paste in hot oil for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>
                  as soon as the oil disappears into the paste it is cooked
                  enough for this stage
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>fry for about 5 mins</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/fried-masala-paste.webp"
                    alt="fried masala paste"
                    title="fried masala paste for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>Add your cauliflower & beans stir into the paste</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>add cauli & beans</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/cauli-and-beans-added-to-masala.webp"
                    alt="cauli and beans added to masala"
                    title="cauli and beans added to masala for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figure>
                  <figcaption>stir into the paste</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-paste-coated-veg.webp"
                    alt="masala paste coated veg"
                    title="masala-paste-coated-veg for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  Add 1 bunch fresh fenegreek leaves & 4 Tbsp fresh chopped
                  coriander
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>add fenugreek & coriander</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/fenugreek-added-to-veg.webp"
                    alt="fenugreek added to veg"
                    title="fenugreek added to veg for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>Add 1 sliced tomato</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>add sliced tomato</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/tomatoes-added-to-veg.webp"
                    alt="tomatoes added to veg"
                    title="tomatoes added to veg for masala veg with fresh fenugreek"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  stir to combine for 5 minutes & add lemon juice right at the
                  end
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>stir for 5 mins then add lemon juice</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-veg-in-a-pan.webp"
                    alt="masala veg in a pan"
                    title="masala veg with fresh fenugreek in a pan"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figure>
                  <figcaption>transfer to serving dish</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/masala-veg-with-fresh-fenugreek.webp"
                    alt="masala veg with fresh fenugreek"
                    title="masala veg with fresh fenugreek in a serving dish"
                  />
                </figure>
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion:</h2>

              <div class="card_image_round">
                <figure>
                  <figcaption>Tandoori chicken grill</figcaption>
                  <img
                    src="/images/masala-veg-with-fresh-fenugreek/650x366/indian-dinner-on-a-plate.webp"
                    alt="indian dinner on a plate"
                    title="indian dinner on a plate with masala veg with fresh fenugreek & spicy balti potatoes"
                  />
                  <figcaption>
                    masala veg with fresh fenugreek & spicy balti potatoes
                  </figcaption>
                </figure>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Masala vegetables with fresh fenegreek</strong> served
                with Tandoori Chicken Grill & Spicy Masala Potatoes for any
                night of the week, on it's own or paired with perfect partners.
                This is a Nutty's style mid-week dinner ;-)
              </p>

              <!-- 
                   Image with spacers before and after, you can copy and
                   paste this and change the details to point to a new
                   image.

                   NOTE: The `alt` & `title` parameters are REALLY
                   important for Google and disabled folks! The text in
                   the `alt` parameter should be exactly the same as the 
                   descriptive filename but without the dashes!
                   Use the title to push the key words of the page.
                   e.g. "sausage pasta" in this instance!
              -->

              <!-- Method List Goes Above Here!!! -->

              <!-- This is THE END!!!!!! -->
              <!-- don't less with the closing tags or anything below here!!! -->
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
