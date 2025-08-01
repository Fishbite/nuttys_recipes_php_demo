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
          You generally only find pork used in the dishes of southern India,
          however, here in the UK, it is one of the more affordable types of
          meat, so I frequently use it and try it out in dishes that normally
          use something else. This dish is a real treat, as pork is just perfect
          when slow cooked like this.
        </p>
        <p>
          My <strong>Rogan Josh Pork Curry</strong> recipe includes the method
          to make the curry paste too, but, do not be daunted! It really is
          quite simple to make your own curry paste, and as a bonus, you will
          have enough paste for several curries! Simply find a jar, sanitise it
          with a little white vinegar and boiling water. The paste will keep for
          a month. If you wish to keep for longer simply fry the paste off
          before storage. See simples ;-) This is a rich red pepper based curry
          paste and indeed curry. Here I am using pork, but you could easily
          substitute for lamb. This is a long, slow cook curry &mdash; 2 1/2 hrs
          &mdash; which will melow out the flavour perfectly. If you wish to
          make a chicken version, cook your sauce for 2 hours, then add your
          chicken.
        </p>

        <p>
          <strong>As always, Nutty has a short cut</strong>
          <em>
            &mdash; You can initially start the cook on the hob and then
            transfer to a pressure cooker for 18 minutes, then finish it off on
            the hob.</em
          >
        </p>

        <p>
          And while we're on the topic of short cuts, if you really don't have
          time, you could buy a shop bought Rogan Josh paste, but, it really
          does pay off to make your own, both in terms of authentic flavour and
          also cost, you'll get a lot more curries & flavour out of your own
          curry paste than you will from a jar from the shops. Added bonus
          &mdash; <em>no preservatives or colourings!</em>
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Rogan Josh Pork Curry</strong>, along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/rogan-josh-pork-curry/650x366/rogan-josh-pork-curry-in-dish-02.webp"
            alt="rogan josh pork curry in dish"
            title="rogan josh pork curry in dish with yogurt & coriander"
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
              <h2>for the spice paste</h2>

              <h2>whole spices</h2>

              <ul>
                <li>8 green caradamon pods</li>
                <li>4 black caradamon pods</li>
                <li>2 Tbsp cumin seeds</li>
                <li>2 Tbsp coriander seeds</li>
                <li>1 Tbsp black peppercorns</li>
                <li>4 whole cloves</li>
                <li>1 whole stick cinnamon</li>
                <li>2 whole bay leaves</li>
                <li>2 whole dried red chillies</li>
              </ul>

              <div class="spacer"></div>

              <h2>wet Ingredients</h2>

              <ul>
                <li>4 cloves garlic</li>
                <li>1 1/2 inch piece of ginger</li>
                <li>150g grilled red pepper</li>
                <li>4 Tbsp tomato puree</li>
                <li>2 Tbsp vegetable oil</li>
              </ul>

              <div class="spacer"></div>

              <h2>ground spices</h2>

              <ul>
                <li>2 Tbsp smoked paprika</li>
                <li>2 Tbsp garam masala</li>
                <li>1 Tbsp turmeric</li>
                <li>2 tsp sea salt</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the Curry</h2>

              <ul>
                <li>1 Tbsp veg oil</li>
                <li>1 medium onion sliced</li>
                <li>1 sweet pointly red pepper</li>
                <li>1 inch fresh ginger</li>
                <li>1 tsp cumin seeds</li>
                <li>1 1/2 tsp coriander seeds</li>
                <li>700g pork leg steaks diced</li>
                <li>5 Tbsp Rogan Josh curry paste</li>
                <li>1 tsp extra hot chilli powder (optional)</li>
                <li>200g tin of plum tomatoes mashed</li>
                <li>75ml vegetable stock</li>
                <li>1 tsp salt</li>
              </ul>

              <div class="spacer"></div>

              <h2>for the Garnish</h2>

              <ul>
                <li>Greek yogurt(optional)</li>
                <li>fresh coriander(optional)</li>
              </ul>

              <div class="spacer"></div>

              <p>
                <strong>Note:</strong> While both of the above are
                <em>optional</em>, I highly recommened including them, as they
                elevate the dish to another level completely.
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
                First of all, you need to make your
                <strong>Rogan Josh Curry Paste</strong>, if you don't have some
                to hand already.
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the paste</h2>

              <ol>
                <li>Heat a small pan & add all of your whole spices</li>
                <li>Heat until they start to colour & smell fragreant</li>
                <li>Once done set into a pestle & mortar to cool</li>
                <li>When cooled grind slightly just to crack the coriander</li>
                <li>Now cook your peppers until slightly charred*</li>
              </ol>

              <div class="spacer"></div>
              <p>
                I use my health grill for this, but you can use the pan you did
                your spices in.
              </p>

              <ol start="6">
                <li>
                  Place all your wet ingredients into a blender, blitz until
                  finely chopped
                </li>
                <li>Add your spices: freshly ground & pre ground</li>
                <li>
                  Blitz until fully combined & gradually add 2 Tbsp of vegetable
                  oil
                </li>
                <li>
                  Once fully combined press tightly into a pre-sterillised jar
                </li>
                <li>store in the fridge until needed</li>
              </ol>

              <div class="spacer"></div>

              <h2>Method for the curry</h2>

              <p>
                With curry paste to hand, prep' the ingredients for the curry:
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for rogan josh pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol>
                <li>Heat a heavy based pan & add your onions</li>
                <li>
                  Fry until just starting to brown & add your cumin & coriander
                </li>
                <li>
                  Push your onion mixture to one side & turn the pan onto full
                  heat
                </li>
                <li>Once really hot, add your pork & stir fry to combine</li>
                <li>When the pork has browned, add your vegetable stock</li>
                <li>add your curry paste & stir well</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add curry paste</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/curry-paste-added-to-pork.webp"
                  alt="curry paste added to pork"
                  title="curry paste added to pork for rogan josh pork curry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>stir well to coat the meat</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/curry-paste-coated-pork.webp"
                  alt="curry paste coated pork"
                  title="curry paste coated pork for rogan josh pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Add ginger</li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add ginger</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/ginger-added-to-pork.webp"
                  alt="ginger added to pork"
                  title="ginger added to for rogan josh pork curry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add red pepper</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/red-peppers-cooked-with-pork.webp"
                  alt="red peppers cooked with pork"
                  title="red peppers cooked with pork for rogan josh pork curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>Add chilli powder if using here</li>
                <li>Add your tomatoes</li>
                <li>
                  As soon as they come to heat reduce the temperature & cover
                </li>
                <li>
                  Set a timer for 1 hour, check the dish, stir & repeat the
                  hour*
                </li>
              </ol>

              <div class="spacer"></div>
              <p>
                *Or place into a pressure cooker for 18 minutes then continue as
                below
              </p>

              <ol start="12">
                <li>
                  Check & adjust the seasoning (salt) if needed, stir & cook for
                  a further 30mins
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                When ready, spoon into a hot suitable serving dish and add some
                yogurt and fresh corriander.
              </p>

              <div class="card_image_round">
                <figcaption>rogan josh pork curry</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/rogan-josh-pork-curry-in-dish-02.webp"
                  alt="rogan josh pork curry in dish"
                  title="rogan josh pork curry in dish with yogurt & coriander"
                />
                <figcaption>with yogurt & coriander</figcaption>
              </div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>rogan josh pork curry</figcaption>
                <img
                  src="/images/rogan-josh-pork-curry/650x366/rogan-josh-pork-curry-and-rice-02.webp"
                  alt="rogan josh pork curry and rice"
                  title="rogan josh pork curry and rice with yogurt & coriander"
                />
              </div>
              <figcaption>with basmati rice</figcaption>
              <div class="spacer"></div>

              <p>
                Serving suggestion for <strong>Rogan Josh pork Curry</strong>:
                Plain basmati rice & / or naan bread, a table spoon of greek
                yogurt with a sprinkle of fresh coriander
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
                    href="https://www.nuttyskitchen.co.uk/rogan-josh-beef-curry.html"
                    >rogan josh beef curry
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/spicy-balti-potatoes.html"
                    class="underline"
                    >spicy balti potatoes
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