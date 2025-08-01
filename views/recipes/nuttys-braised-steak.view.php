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
          Cold weather is well and truly upon us around now and it's the perfect
          time for <strong>Nutty's Braised Steak</strong> in a rich gravy with
          shallots, leeks and whole chestnut mushrooms, which are absolutely
          delicious. I made this in my pressure cooker, but, it can be braised
          on a stove top, or even in the oven on long, low and slow.
          <strong>Nutty's Braised Steak</strong> is delcious with a creamy mash
          and vegetables of your choice. This is super quick to put together
          once your vegetables are prepared.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Nutty's Braised Steak</strong> along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/nuttys-braised-steak/650x366/braised-steak-mash-and-veg-plated.webp"
            alt="braised steak mash and  veg plated"
            title="braised steak mash and  veg plated for Nutty's braised steak"
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
                <li>2 x 250g packs of lean braising (4)steaks</li>
                <li>2 large garlic cloves &mdash; slightly crushed</li>
                <li>2 Tbsp vegetable oil</li>
                <li>
                  4 eschallon shallots peeled & sliced in half (lenghways)
                </li>
                <li>1 leek sliced into 5mm disks</li>
                <li>12 - 16 chestnut mushrooms, cleaned and stalks trimmed</li>
                <li>1 Indian, or 2 English bay leaves</li>
                <li>1 tsp Dijon mustard for each beef steak</li>
                <li>1 tsp black peppercorns crushed</li>
                <li>1 tsp Himalayan sea salt</li>
                <li>4 tsp thyme leaves</li>
                <li>1 OXO&trade; beef stock cube crushed</li>
                <li>1 OXO&trade; vegetable stock cube crushed</li>
                <li>1 tsp Worcester sauce</li>
                <li>1 dessert spoon plain flour</li>
                <li>1 dessert spoon Bisto&trade; powder</li>
                <li>1 dessert spoon butter</li>
                <li>15 - 20 Indian long peppers (optional)</li>
                <li>1 Tbsp tomato puree</li>
                <li>1 pint water</li>
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
                There's just a little veg' to prepare for this dish and once
                you've got that job done, the rest is a breaze to put together.
                Just clean the mushrooms with some kitchen paper to remove any
                soil, then trim the stalks and pull them out of the mushrooms,
                so that they lay flat on each side as you fry them &mdash; put
                the stalks in to fry with the mushrooms! Then, you just need to
                pre-brown everything:- shallots, leeks, mushrooms and steak,
                putting everything into your chosen cooking pot as you go, then
                make the gravy / sauce and add that to the pot too.
              </p>

              <h2>Indian Long Peppers</h2>
              <p>
                I bought these Indian Long Peppers a little while ago, for a
                specific recipe that I had in mind at the time, but, I never
                thought very much of them. However, I thought I'd give them
                another go and added them to this recipe. I'm so glad I did,
                they have a very subtle flavour, but definitely add a lovely
                warming and welcome heat to the dish, the kind of heat that
                makes you glow from the inside out :-) They're not exactly
                <em>edible</em> when cooked, so you will have to fish them out
                and / or warn your diners about them! They soften up a little
                when cooked and have a slight floral note to them when chewed
                &mdash; I had to do that! Just to really get a handle on exactly
                what they were, so, even though I say they're <em>optional</em>,
                it's well worth using them if you can, I think I had to order
                mine on-line, as I couldn't find them in my usual stores. You
                could use whole black peppercorns as a substitute, but the heat
                from them will be a little more ferocious.
              </p>
              <p>
                With all that in mind, get all of your ingredients ready, so you
                have everything to hand and to make sure you don't miss
                anything, which is so easily done!
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>heat a large heavy based frying pan & add oil</li>
                <li>add the bay leaf to the pan then</li>
                <li>
                  place your shallots into the pan. Once browned on one side
                  turn over
                </li>
                <li>
                  add in the leeks &mdash; allow to brown slightly & turn over
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>leeks & shallots browning</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/leeks-and-shallots.webp"
                  alt="leeks and shallots"
                  title="leeks and shallots for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>tip out into the cooking pot*</li>
                <li>add your whole mushrooms &mdash; just fry each side</li>
                <li>tip out into the cooking pot</li>
              </ol>

              <div class="spacer"></div>

              <p>
                *This can be your pressure cooker pot, a large sauce pan, or,
                even a casserole dish &mdash; the choice is yours. As a rough
                guide:- pressure cooker &mdash; 30 minutes, large sauce pan
                &mdash; 2 hours, casserole dish &mdash; 2 hours
              </p>

              <ol start="8">
                <li>coat each steak with a tsp of Dijon mustard on one side</li>
                <li>
                  place two steaks (mustard side down) into a hot frying pan
                  along with two crushed garlic cloves, allow the steaks to
                  brown & coat the other side with mustard, then flip & repeat
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>brown your steaks</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/mustard-coated-steak-frying.webp"
                  alt="mustard coated steak frying"
                  title="mustard coated steak frying for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>
                  add your salt & pepper to the cooking pot & stir through
                </li>
                <li>
                  remove your two browned steaks from the frying pan & put them
                  into the cooking pot
                </li>
                <li>
                  add your long peppers to the frying pan with the second steaks
                  if using
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>Indian long peppers</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/indian-long-peppers-on-a-plate.webp"
                  alt="indian long peppers on a plate"
                  title="indian long peppers on a plate for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  place your other two steaks into the frying pan and allow them
                  to brown on both sides
                </li>
                <li>
                  remove your second browned steaks & long pepper to the cooking
                  pot &mdash; don't wash the pan!
                </li>
                <li>
                  mix Bisto and flour together in a jug or mug and add a little
                  water while mixing until you have a smooth gravy paste
                </li>
                <li>
                  using the same pan that you browned the steaks in, add a
                  little butter to the pan, then add the gravy paste and water
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>make the gravy</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/gravy-in-pan.webp"
                  alt="gravy in a pan"
                  title="gravy in a pan for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <ol start="17">
                <li>
                  mix rapidly until it combines & begins to thicken, then add
                  your veg & beef stock cubes
                </li>
                <li>
                  add the thyme, tomato puree & Worcester sauce to the cooking
                  pot & top with your gravy
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>everything in the cooking pot</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/steak-and-gravy-in-pressure-cooker.webp"
                  alt="steak and gravy in pressure cooker"
                  title="steak and gravy in pressure cooker for Nutty's braised steak"
                />
              </div>
              <div class="spacer"></div>

              <ol start="19">
                <li>
                  cover and cook in the pressure cooker on meat setting for 30
                  minutes, or, if you are using large sauce pan &mdash; 2 hours,
                  or, in a casserole dish &mdash; 2 hours
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/nuttys-braised-steak/650x366/braised-steak-mash-and-veg-plated.webp"
                  alt="braised steak mash and  veg plated"
                  title="braised steak mash and  veg plated for Nutty's braised steak"
                />
                <figcaption>braised steak, mash & veg...</figcaption>
              </div>
              <div class="spacer"></div>

              <h4>Serving suggestion</h4>
              <p>
                Mashed potatoes, sliced carrots & cabbage &mdash; wheres my
                fork?
              </p>

              <p>
                That ultimate, melt in your mouth steak, with a sumptuously rich
                and incredibly tasty warming gravy that will soften the hearts
                of all, guaranteed. This dish is not about the tender succulant
                steak it is all about sauce! A bit of effort pays huge dividends
                Nutty :-P xxx
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
                    href="https://www.nuttyskitchen.co.uk/mums-braised-steak.html"
                    class="underline"
                    >mum's braised steak
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