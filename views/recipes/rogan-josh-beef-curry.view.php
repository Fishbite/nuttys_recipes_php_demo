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
          My <strong>Rogan Josh Beef Curry</strong> recipe also includes the
          spice paste recipe, but do not be daunted, it really is quite simple
          to make your own spice paste and as a bonus you will have enough paste
          for several curries. Simply find a jar, sanitise it with a little
          white vinegar and boiling water. The paste will keep for a month in
          the fridge. If you wish to keep for longer simply fry the paste off
          before storage. See simples ;-) This is a rich red pepper based curry
          paste and indeed curry. Here I am using beef, but you could easily
          subsitute for lamb. This is a slow, long cook curry &mdash; 2 & 1/2
          hrs &mdash; which will mellow out the curry perfectly. If you wished
          to make a chicken version, cook your sauce for 2 hours then add your
          chicken.
        </p>

        <p>
          As always, Nutty has a short cut &mdash; You can initially start the
          cook on the hob and then transfer to a pressure cooker for 18 minutes,
          then finish it off on the hob.
        </p>

        <p>
          And while we're on the topic of short cuts, if you really don't have
          time, you could buy a shop bought Rogan Josh paste, but, it will
          really pay off to make your own both in terms of authentic flavour and
          also cost, you'll get a lot more curries out of your own spice paste
          than you will from a little jar from the shops.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step by step guide on how
          to make my <strong>Rogan Josh Beef Curry</strong> with pictures to
          guide you.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/rogan-josh/650x366/rogan-josh-plated.webp"
            alt="rogan josh and rice plated"
            title="rogan josh beef curry served with plain basmati rice"
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
              <h2>Ingredients for the Spice Paste</h2>

              <h3>whole spices</h3>

              <ul>
                <li>8 green cardamon pods</li>
                <li>4 black cardamon pods</li>
                <li>2 Tbsp cumin seeds</li>
                <li>2 Tbsp coriander seeds</li>
                <li>1 Tbsp black peppercorns</li>
                <li>4 whole cloves</li>
                <li>1 whole cinnamon stick</li>
                <li>2 whole bay leaves</li>
                <li>2 whole dried red chillies</li>
              </ul>

              <div class="spacer"></div>

              <h3>wet Ingredients</h3>

              <ul>
                <li>4 cloves garlic</li>
                <li>1 1/2 inch piece of ginger</li>
                <li>150g grilled red pepper</li>
                <li>4 Tbsp tomato puree</li>
                <li>2 Tbsp vegetable oil</li>
              </ul>

              <div class="spacer"></div>

              <h3>ground spices</h3>

              <ul>
                <li>2 Tbsp smoked paprika</li>
                <li>2 Tbsp garam masala</li>
                <li>1 Tbsp turmeric</li>
                <li>2 tsp sea salt</li>
              </ul>

              <div class="spacer"></div>

              <h2>Ingredients for the Curry</h2>

              <h2>serves 4</h2>

              <ul>
                <li>1 Tbls veg oil</li>
                <li>1 medium onion sliced</li>
                <li>1 sweet pointly red pepper</li>
                <li>1 inch fresh ginger</li>
                <li>1 tsp cumin seeds</li>
                <li>1 1/2 tsp coriander seeds</li>
                <li>700g diced beef or 350g beef & 350g of white mushrooms</li>
                <li>1 Tbsp plain flour (optional)</li>
                <li>4 to 6 Tbsp Rogan Josh Curry paste</li>
                <li>1 tsp extra hot chilli powder (optional)</li>
                <li>200g tin of Plum tomatoes mashed</li>
                <li>75ml vegetable stock</li>
                <li>1 tsp salt</li>
              </ul>

              <div class="spacer"></div>

              <h3>Ingredients for the Garnish</h3>

              <ul>
                <li>Greek yogurt</li>
                <li>Fresh Coriander</li>
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
                If you are going to make your own
                <strong>Rogan Josh Beef Curry</strong> paste, now's the time to
                do it! It doesn't take too long to make and if you do it the day
                before, assembling the curry is a breeze!
              </p>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the paste</h2>

              <ol>
                <li>Heat a small pan & add all of your whole spices</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>toast the whole spices</figcaption>
                <img
                  src="/images/rogan-josh/650x366/whole-spices-for-rogan-josh.webp"
                  alt="whole spices for rogan josh"
                  title="whole spices for rogan josh rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>Heat until they start to colour & smell fragrant</li>
                <li>Once done set into a pestle & mortar to cool</li>
                <li>When cooled grind to a powder</li>
                <li>
                  pick out your cardamon pods & bash the husk off & just use the
                  internal seeds
                </li>
                <li>Now grill your peppers until slightly charred*</li>
              </ol>

              <div class="spacer"></div>

              <p>
                *I use my health grill for this but you can use the pan you did
                your spices in
              </p>

              <ol start="7">
                <li>
                  Place all your wet ingredients except oil (garlic, ginger,
                  grilled red pepper, tomato puree) into a blender & blitz until
                  finely chopped
                </li>
                <li>Add your spices: freshly ground & pre-ground</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>spices, garlic, ginger, tomato puree</figcaption>
                <img
                  src="/images/rogan-josh/650x366/spices-garlic-ginger-tomato-puree.webp"
                  alt="garlic spices ginger tomato puree"
                  title="garlic spices ginger tomato puree for rogan josh beef curry"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>pre-ground spices</figcaption>
                <img
                  src="/images/rogan-josh/650x366/ground-spices-for-rogan-josh.webp"
                  alt="ground spices for rogan josh"
                  title="pre-ground spices for rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="9">
                <li>
                  Blitz until fully combined & gradually add 2 Tbsp of vegetable
                  oil
                </li>
                <li>
                  Once fully combined press tightly into a pre-sterilised jar
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>rogan josh curry paste</figcaption>
                <img
                  src="/images/rogan-josh/650x366/rogan-josh-paste-02.webp"
                  alt="rogan josh paste"
                  title="rogan curry josh paste for rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <p>Seal and store in the fridge until needed.</p>

              <h2>Make the curry</h2>

              <ol>
                <li>
                  Heat a heavy based pan & add your onions, garlic, peppers &
                  ginger
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cook onions, garlic & peppers</figcaption>
                <img
                  src="/images/rogan-josh/650x366/onions-peppers-and-garlic-frying.webp"
                  alt="rogan josh paste"
                  title="rogan josh paste rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="2">
                <li>
                  Fry until just starting to brown, push aside to create a well
                  & add your salt, cumin & coriander seeds to fry. Once browned
                  stir well to combine
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add cumin & coriander seeds</figcaption>
                <img
                  src="/images/rogan-josh/650x366/coriander-and-cumin-seeds-added.webp"
                  alt="rogan josh paste"
                  title="rogan josh paste rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  Place your fresh beef into the plain flour & combine to coat
                  the beef
                </li>
                <li>
                  Push your onion mixture to one side & turn the pan onto full
                  heat
                </li>
                <li>Once really hot, add your beef & stir fry to combine</li>
                <li>
                  When the beef has browned, add your spice paste & stir fry
                </li>
              </ol>

              <div class="spacer"></div>

              <p><strong>Add chilli powder if using here!</strong></p>

              <div class="card_image">
                <figcaption>add spice paste to browned beef</figcaption>
                <img
                  src="/images/rogan-josh/650x366/beef-browned-spice-paste-added.webp"
                  alt="rogan josh paste"
                  title="rogan curry josh paste for rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>stir fry paste into beef</figcaption>
                <img
                  src="/images/rogan-josh/650x366/spice-paste-cooked-into-beef.webp"
                  alt="spice paste cooked into beef"
                  title="spice paste cooked into beef for rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="7">
                <li>Add your vegetable stock cube & tomatoes</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add stock & tomatoes</figcaption>
                <img
                  src="/images/rogan-josh/650x366/stock-and-tomatoes-added.webp"
                  alt="stock and tomatoes added"
                  title="stock and tomatoes added to rogan josh beef curry"
                />
              </div>
              <div class="spacer"></div>

              <ol start="8">
                <li>
                  As soon as it comes to heat, reduce the temperature & cover
                </li>
                <li>
                  Set a timer & simmer for 1 hour, stir occasionally (every 20
                  mins or so) so it doesn't catch on the bottom of the pan, then
                  repeat for another hour*
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                *Or place into a pressure cooker for 18 minutes then continue as
                below
              </p>

              <ol start="10">
                <li>Check the dish again, stir & cook for a further 30mins</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>rogan josh beef curry finished</figcaption>
                <img
                  src="/images/rogan-josh/650x366/rogan-josh-cooked-in-wok.webp"
                  alt="rogan josh cooked in wok"
                  title="rogan josh beef curry cooked in wok & ready to serve"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>rogan josh beef curry</figcaption>
                <img
                  src="/images/rogan-josh/650x366/rogan-josh-plated.webp"
                  alt="rogan josh and rice plated"
                  title="rogan josh beef curry served with plain basmati rice"
                />
                <figcaption>served with plain basmati rice & naan</figcaption>
              </div>
              <div class="spacer"></div>

              <p>
                <strong>Rogan Josh Beef Curry</strong> finished with fresh
                coriander and yogurt for that true authentic flavour.
              </p>

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
