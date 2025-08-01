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
          <strong>Lamb Pulao Rice</strong> is a delicious baked-rice dish made
          with minced lamb and aromatic spices. It's almost like a biryani but
          without the hassle or food coloring! Unlike traditional biryani, which
          is made with layers of rice and diced meat, this recipe uses minced
          lamb for a simpler yet equally satisfying dish.
        </p>
        <p>
          The result is an excellent, delicately spiced combination of succulent
          lamb mince and fluffy rice. Serve it with a mint raita for a
          refreshing contrast to the rich lamb flavors.
        </p>
        <p>
          Yes, the ingredients list might seem daunting at first, but with a bit
          of organisation, it's completely manageable — I promise! Prep your
          ingredients into five separate containers the night before, clear away
          the jars and pots, and the next day you'll breeze through the recipe.
          Once your spices are ready, the rest is straightforward.
        </p>
        <p>
          For best results, use non stick pan then transfere to a Dutch oven to
          bake or any dish that works both on the hob and in the oven.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Lamb Pulao Rice</strong> along with some pictures as a
          guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/lamb-pulao-rice/650x366/lamb-pulao-rice-in-dish-02.webp"
            alt="lamb pulao rice in dish"
            title="lamb pulao rice served in a dish"
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
              <h2>serves 4 - 6</h2>

              <h2>ingredients rice</h2>

              <ul>
                <li>230g basmati rice*</li>
                <li>2 liter cold water</li>
                <li>1 tsp salt</li>
                <li>1 liter boiling water</li>
                <li>3 Tbsp ghee to dress (optional)**</li>
              </ul>

              <div class="spacer"></div>

              <p>*Soak the rice for 30 minutes</p>

              <p>
                **This goes on top of the dish prior to baking. You could use
                butter or even olive oil, but Ghee is the best option.
              </p>

              <h2>ingredients whole spices</h2>

              <ul>
                <li>1 cinnamon stick</li>
                <li>2 Indian bay leaves</li>
                <li>
                  3 black cardamom pods crushed, seeds removed, discard the
                  husks
                </li>
                <li>8 black peppercorns</li>
                <li>1 tsp cumin seeds</li>
              </ul>

              <div class="spacer"></div>

              <h2>ingredients wet / fresh</h2>

              <ul>
                <li>3 Tbsp Ghee or vegetable oil</li>
                <li>3 medium onions sliced</li>
                <li>1 whole garlic bulb, peeled into cloves & sliced</li>
                <li>3cm fresh ginger shredded</li>
                <li>3 green chillies sliced</li>
                <li>3 small tomatoes chopped</li>
                <li>1 tsp tamarind paste</li>
                <li>600g lamb mince</li>
              </ul>

              <div class="spacer"></div>

              <h2>ingredients ground</h2>

              <ul>
                <li>1 tsp sea salt crushed</li>
                <li>1 tsp turmeric powder</li>
                <li>1 tsp chilli powder</li>
                <li>1 tsp Kashmiri chilli powder</li>
                <li>2 tsp garam masala powder</li>
                <li>1 tsp ground coriander</li>
                <li>1 tsp ground cumin</li>
                <li>1 tsp ground black peppercorns</li>
                <li>2 tsp kasoori methi (dried fenigreek leaves)</li>
              </ul>

              <div class="spacer"></div>

              <h2>ingredients mint raita</h2>

              <ul>
                <li>3 Tbsp greek yogurt</li>
                <li>2 tsp mint sauce</li>
                <li>1 tsp ground cumin</li>
                <li>1 pinch of salt</li>
                <li>dash of lemon juice</li>
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
                First of all, get your rice onto soak in cold water and have all
                your ingredients prepared, chopped and ready in the order that
                the ingredients are listed - see below. If that is not yet done,
                do not heat your pan or you will get in a muddled mess! &mdash;
                creating unnecessary mess & making you Nutty....Get a timer and
                set it for 30 minutes as you put your rice onto soak
              </p>
              <p>
                So, this is what I mean about sorting your ingredients out
                before you start:
              </p>

              <div class="card_image">
                <figcaption>get everything out</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/ingredients-all.webp"
                  alt="ingredients all"
                  title="all the ingredients for lamb pulao rice"
                />
              </div>

              <div class="card_image">
                <figcaption>sort the spices into pots & piles</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/ingredients-aromats.webp"
                  alt="ingredients aromats"
                  title="all the ingredients for lamb pulao rice"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>finally prep everything ready</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/ingredients-ready.webp"
                  alt="ingredients ready"
                  title="ingredients ready for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <h2>now we're ready to cook!</h2>
              <p>Now that your rice has soaked for 30 minutes:</p>

              <ol>
                <li>Heat a heavy based pan on a high heat</li>
                <li>
                  add ghee or oil, once it is shimmering add your whole spices
                  (cinnamon, bay, black cardamom, black peppercorns & cumin
                  seeds)
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add whole spices</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/frying-whole-spices-in-pan.webp"
                  alt="frying whole spices in a pan"
                  title="frying whole spices in a pan for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  as soon as they begin to sizzle, add the garlic & onions, cook
                  for 5 minutes
                </li>
                <li>
                  add ginger & chillies, cook for 10 minutes, stir regularly
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add ginger & chillies</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/chillies-and-ginger-added-to-pan.webp"
                  alt="chillies and ginger added pan"
                  title="chillies and ginger added pan for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>add chopped tomatoes & 1 tsp salt, cook for 5 minutes</li>
                <li>
                  add the remaining ground spices ( turmeric, chilli, garam
                  masala, coriander, cumin, black pepper, kasoori methi (dried
                  fenigreek leaves) & tamarind paste) cook for 2 minutes
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook spices for 2 mins</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/cooked-onions-and-spices.webp"
                  alt="cooked onions and spices"
                  title="cooked onions and spices for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>
                  now add in your lamb mince, breaking it down while browning it
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add mince</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/meat-added-to-onions-and-spices.webp"
                  alt="meat added to onions and spices"
                  title="meat added to onions and spices for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  once browned, lower the heat, cover & cook for 12 minutes
                </li>
                <li>preheat the oven to 180c & drain your soaked rice</li>
                <li>
                  boil a kettle with 1 liter of water, add to a pan with rice &
                  salt
                </li>
                <li>place onto the hob on highest heat until it fully boils</li>
                <li>
                  cook the rice for just 3 to 4 minutes, then drain immediately
                </li>
                <li>
                  remove the lid from your lamb & take the cinnamon stick & bay
                  leaves out then spread the meat evenly in the pan
                </li>
                <li>scatter a layer of rice over the mince</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spread the meat evenly</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/meat-cooked.webp"
                  alt="meat cooked"
                  title="meat cooked for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>scatter rice over the meat</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/rice-added-to-pan.webp"
                  alt="rice added to pan"
                  title="rice added to pan for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="14">
                <li>dot a few spots of ghee accross the top of the rice</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dot rice with ghee</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/rice-dotted-with-ghee.webp"
                  alt="rice dotted with ghee"
                  title="rice dotted with ghee for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="15">
                <li>
                  cover with a tight fitting lid & bake the dish for 35 to 40
                  minutes, then test the rice for doneness & serve
                </li>
              </ol>
              <div class="spacer"></div>

              <h2>Make the raita</h2>
              <div class="card_image">
                <figcaption>raita ingredients</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/ingredients-raita-02.webp"
                  alt="ingredients raita"
                  title="raita ingredients for lamb pulao rice"
                />
              </div>
              <div class="spacer"></div>

              <ol start="16">
                <li>
                  to make your raita simple mix everything together with a fork
                  & serve ;-) thin it down with a little milk or water if too
                  thick
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cooked lamb pulao</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/cooked-lamb-pulao-rice-in-pan.webp"
                  alt="cooked lamb pualao rice in pan"
                  title="cooked lamb pualao rice straight from the oven"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dig in & serve!</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/meat-revealed-under-rice-02.webp"
                  alt="meat revealed under rice"
                  title="meat revealed under rice of lamb pualao"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Delve into this pot of treasure and let the rich aroma of spices
                and succulent lamb fill your dining room with irresistible
                warmth.&#x2728;
              </p>

              <h2>Serving suggestion for Lamb Pulao</h2>

              <div class="card_image_round">
                <figcaption>lamb pulao rice</figcaption>
                <img
                  src="/images/lamb-pulao-rice/650x366/lamb-pulao-rice-in-dish-02.webp"
                  alt="lamb pulao rice in a dish"
                  title="lamb pulao rice in a dish"
                />
              </div>
              <div class="spacer"></div>

              <p>Simply a bowl & fork nothing more is required</p>
              <p>This is the most lamb tasting lamb dish ever. Enjoy :-P</p>

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
            <section class="related">
              <h1>Related recipes</h1>
              <ul>
                <li>
                  <a
                    class="underline"
                    href="https://www.nuttyskitchen.co.uk/chicken-biryani.html"
                    >chicken biryani
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chapati.html"
                    class="underline"
                    >chapati flat bread
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