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
          <strong>Steak and Ale pie</strong> This classic dish features a rich,
          hearty stew topped with a golden puff pastry lid. While traditional
          recipes often include a pastry base, this version keeps it lighter
          without compromising on flavour. The filling is generously portioned,
          ensuring a satisfying meal. For convenience, this recipe uses braising
          steak and ready-made, all-butter puff pastry. Everything is browned
          and simmered in a Dutch oven for an hour and a half, allowing the
          flavours to develop beautifully. If you don’t have a Dutch oven, a
          heavy-based pan with a lid will work just as well.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Steak and Ale pie</strong> along with some pictures.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/steak-and-ale-pie/650x366/steak-and-ale-pie-with-veg-on-a-plate-02.webp"
            alt="steak and ale pie with veg on a plate"
            title="steak and ale pie with veg on a plate"
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
              <p>Here's what you need :¬P</p>

              <h2>serves 3 - 4</h2>

              <!-- Ingredients List Goes Below Here!!! -->
              <ul>
                <li>600g Whole braising steak diced</li>
                <li>1 Tbsp meat tenderiser</li>
                <li>6 Tbsp cold water</li>
                <li>3 Tbsp vegetable oil</li>
                <li>400g round shallots - quatered</li>
                <li>1 small onion finely chopped</li>
                <li>1 carrot finely chopped</li>
                <li>2 sticks celery finely chopped</li>
                <li>200g button chestnut mushrooms</li>
                <li>3 cloves garlic crushed</li>
                <li>1 Tbsp plain flour</li>
                <li>Salt & pepper</li>
                <li>1 tsp dried thyme</li>
                <li>dash Worcester sauce</li>
                <li>2 tsp Dyjon mustard</li>
                <li>OXO&trade; beef stock crumbled</li>
                <li>OXO&trade; vegetable stock cube crumbled</li>
                <li>500ml Bishops Finger (Strong Ale)</li>
                <li>320g ready made puff pastry</li>
                <li>1 egg</li>
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
                Alright, first up—let’s make that tenderiser! 🥩💥 1️⃣ Mix the
                powder with water. 2️⃣ Dunk your steaks in and let ‘em soak in
                the fridge for 45 minutes—flip ‘em now and then! While that’s
                working its magic… 🧅🔪 Peel those shallots (no crying now!).
                Chop up the rest of your ingredients—get everything prepped and
                ready to roll!
              </p>

              <p>
                Here's my ingredients prep'ed to make
                <strong>Steak and Ale Pie</strong> :-) x
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/ingredients-02.webp"
                  alt="ingredients"
                  title="ingredients for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>
              <p>tech guy says: ^-^ <em>the mustard's missing Nutty!</em></p>
              <!-- Method List Goes Below Here!!! -->

              <h2>make the pie filling</h2>
              <ol>
                <li>Heat a heavy based pan with a lid to very hot & add oil</li>
                <li>
                  once the oil shimmers add your shallots and cook for 10
                  minutes
                </li>
                <li>stir occasionally until they begin to brown</li>
                <li>add your onions carrots & celery, soften for 5 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>soften the veg</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/softening-veg-in-a-pan-02.webp"
                  alt="softening veg in a pan"
                  title="softening veg in a pan for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>add mushrooms & garlic fry for 5 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add mushrooms</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/mushrooms-added-to-pan-of-veg-02.webp"
                  alt="mushrooms added to pan of veg"
                  title="mushrooms added to pan of veg for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="6">
                <li>season with salt & pepper</li>
                <li>set everything into a separate dish</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>remove veg from pan</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/softened-veg-in-a-dish-02.webp"
                  alt="softened veg in a dish"
                  title="softened veg in a dish for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>remove the meat from the marinade & dry it off</li>
                <li>dice into cubes, similar size the your shallots</li>
                <li>
                  place your flour onto a plate & season with salt & pepper
                </li>
                <li>place the dry meat into the flour & combine to coat</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>coat meat with seasoned flour</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/floured-steak-on-a-plate-02.webp"
                  alt="floured steak on a plate"
                  title="floured steak on a plate for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>
                  now add the diced meat into your hot pan & seal / brown it off
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>seal the meat</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/sealing-steak-in-a-pan-01.webp"
                  alt="sealing steak in a pan"
                  title="sealing steak in a pan for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>add thyme, stock cubes, Worcester sauce & dyjon mustard</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add seasoning ingredients</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/mustard-and-seasoning-added-to-steak-02.webp"
                  alt="mustard and seasoning added to steak"
                  title="mustard and seasoning added to steak for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>stir to combine & fry for 5 minutes</li>
                <li>add in your ale & deglaze the pan</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add your ale</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/ale-added-to-steak-in-a-pan.webp"
                  alt="ale added to steak in a pan"
                  title="ale added to steak in a pan for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="16">
                <li>return your vegetables to the pan</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add the softend veg</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/veg-added-to-steak-and-ale-02.webp"
                  alt="veg added to steak and ale"
                  title="veg added to steak and ale for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="17">
                <li>allow to reduce for 10 minutes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>reduce the ale for 10 mins</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/ale-reducing-in-a-pan-02.webp"
                  alt="ale reducing in a pan"
                  title="ale reducing in a pan for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <ol start="18">
                <li>
                  turn the ring down to very low & set a timer for 1 & 1/2 hours
                </li>
                <li>cover with a well fitting lid</li>
                <li>once cooked allow to cool completely*</li>
              </ol>

              <div class="spacer"></div>

              <p>
                *I do this on an ice block, once cool, place in the fridge
                overnight to let those deep rich flavours develop.
              </p>

              <div class="card_image">
                <figcaption>cool the pie filling</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/pie-filling-in-a-dish-02.webp"
                  alt="pie filling in a dish"
                  title="pie filling in a dish for steak and ale pie"
                />
              </div>
              <div class="spacer"></div>

              <h2>make the pie!</h2>

              <p>
                Now you just need to make the pie lid and pop it in your
                pre-heated oven :-)
              </p>

              <ol>
                <li>pre-heat the oven, set your oven to 180c</li>
                <li>remove your stewed meat & pastry from the fridge</li>
                <li>
                  cut a pastry top to fit the dish, wash the edge of the dish
                  with egg
                </li>
                <li>wash the edge of the pastry with egg</li>
                <li>
                  now place the pastry lid onto the dish & egg wash the top
                </li>
                <li>
                  cut some diamond shapes with your left over pastry & create
                  leaves
                </li>
                <li>
                  using the back of a knife, press in the center then press at
                  an angle on both sides
                </li>
                <li>
                  glue your leaves across the top of the pastry lid with egg
                  wash & bake for 45 minutes on a baking tray
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add pastry topping & bake for 45 mins</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/pie-with-raw-pastry-topping.webp"
                  alt="pie with raw pastry topping"
                  title="raw pastry topping on steak and ale pie filling"
                />
              </div>

              <div class="card_image">
                <figcaption>steak and ale pie</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/steak-and-ale-pie-cooked-04.webp"
                  alt="steak and ale pie cooked"
                  title="steak and ale pie with golden puff pastry topping"
                />
                <figcaption>...with golden puff pastry topping</figcaption>
              </div>
              <div class="spacer"></div>

              <div class="card_image_round">
                <figcaption>steak and ale pie served</figcaption>
                <img
                  src="/images/steak-and-ale-pie/650x366/steak-and-ale-pie-with-veg-on-a-plate-02.webp"
                  alt="steak and ale pie with veg on a plate"
                  title="steak and ale pie with veg on a plate"
                />
                <figcaption>...with a side of veg</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                Oh! My! This turned out pretty goood! There's so much filling
                :-) And the tasy of real ale? WOW! :¬P
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
                    href="https://www.nuttyskitchen.co.uk/fluffy-mashed-potatoes.html"
                    >fluffy mashed potatoes
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/beef-and-mushroom-suet-pastry-pie.html"
                    class="underline"
                    >beef & mushroom suet pastry pie
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