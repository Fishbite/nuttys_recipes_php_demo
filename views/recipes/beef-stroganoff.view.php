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
          This is such a well known recipe & much loved, extremely rich and
          calorific so I felt it's time to re-invent the dish because, in my
          dream last night was what to do with that greek yogurt I had in the
          fridge ( I know how sad is that :-). It is still rich, moreish and
          delicious, but I have massively reduced the calory count by replacing
          sour cream with greek yogurt! No added butter! My
          <strong>Beef stroganoff</strong> also is cheaper as most recipes use
          FILLET steak &mdash; no no no, thats no! Nutty saves that for a very
          special occassion! I'm going to use braising steak bought as a whole
          steaks and sliced as 2.5 cm sliced cuts. Yes I will set it into my
          pressure cooker for just 20 minutes, it will take an hour at least on
          the hob or in the oven. I do finish it off for 30 minutes in the oven
          to split the yogurt & paprika giving it an oven baked appeareance. As
          with all my recipes &mdash; prepare to succeed &mdash; then you can
          cook faster! Slice, chop, be ready, saving on that darn electric cost
          :-)
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Beef Stroganoff</strong> along with some pictures as a
          guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/beef-stroganoff/640x366/beef-stroganoff-and-mash-03.webp"
            alt="beef stroganoff and mash"
            title="beef stroganoff and mash served in a dish"
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
              <h2>serves 3 - 4</h2>
              <ul>
                <li>400g / 2 whole (not diced) braising steaks</li>
                <li>1/2 tsp ground sea salt</li>
                <li>1 tsp ground black pepper</li>
                <li>2 banana shallots ( echalion ) sliced</li>
                <li>1/2 a small white onion diced finely</li>
                <li>1 Tbsp veg oil</li>
                <li>1 Tbsp olive oil</li>
                <li>200g pack chestnut mushrooms quartered</li>
                <li>1 tsp english mustard powder or engish mustard*</li>
              </ul>

              <div class="spacer"></div>

              <p>
                <em
                  >*If you use english mustard reduced your red wine vinegar to
                  1.5 Tbsp as the mustard contains vinegar!</em
                >
              </p>

              <ul>
                <li>1 Tbsp paprika</li>
                <li>1 Tbsp smoked paprika</li>
                <li>1 heaped tsp onion powder</li>
                <li>1 beef OXO&trade; stock cube</li>
                <li>1 veg OXO&trade; stock cube</li>
                <li>2 Tbsp red wine vinegar</li>
                <li>500 ml greek yogurt</li>
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
                I find the packs of pre-cut / diced meat tend to be not so good.
                The chunks are never the same size and there's always bits that
                you really wouldn't want &mdash; excess fat, bits of grissle
                etc. :-(
              </p>
              <p>
                So, when I said use "whole" braising steaks, I meant it! I've
                brought a pack of 2 braising steaks and cut them to the size I
                want them &mdash; in to about 2.5 cm sliced pieces. Yummy! I'm
                so looking forward to eating this :-P
              </p>

              <p>So get all your ingredients ready and prepared:</p>

              <figure class="card_image">
                <figcaption>ingredients prepared!</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>
                  Heat a heavy based pan with both oils on your hottest setting
                </li>
                <li>add your onions and quickly sweat them down for 5 mins</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>sweat down the onions</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/onions-frying.webp"
                  alt="onions frying"
                  title="onions frying for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="3">
                <li>
                  add your mushrooms and repeat the sweating down / frying
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>sweat down the mushrooms</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/mushrooms-frying.webp"
                  alt="mushrooms frying"
                  title="mushrooms frying for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="4">
                <li>season both veg with salt & pepper</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add salt & pepper</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/pepper-added.webp"
                  alt="pepper added"
                  title="pepper added for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="5">
                <li>set everything aside into the pressure cooker pot</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>set aside for a moment</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/oinons-and-mushrooms-in-a-pot.webp"
                  alt="onions & mushrooms in a pot"
                  title="onions & mushrooms in a pot for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="6">
                <li>
                  now add your sliced beef, leave for two minutes to properly
                  fry the beef until brown
                </li>
                <li>flip the beef over to brown the other side</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>brown the beef all over</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-frying.webp"
                  alt="beef frying"
                  title="beef frying for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="8">
                <li>now stir fry for 5 minutes to ensure it's all hot</li>
                <li>
                  tip in all your spices, stock cubes, english mustard etc..
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add spices etc...</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/spices-added.webp"
                  alt="spices added"
                  title="spices added for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="10">
                <li>add red wine vinegar</li>
                <li>stir fry until it smells fragrant</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add red wine vinegar & stir</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-coated-with-spices.webp"
                  alt="beef coated with spices"
                  title="beef coated with spices for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="12">
                <li>add your yogurt, mix well & turn off the hob</li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>add yogurt</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/yogurt-added-to-beef.webp"
                  alt="yogurt added to beef"
                  title="yogurt added to beef for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>mix in the yogurt</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/yogurt-mixed-with-beef-and-spices.webp"
                  alt="yogurt mixed in with beef & spices"
                  title="yogurt mixed in with beef & spices for beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="13">
                <li>
                  set all the meat and sauce into your pressure cooking pot
                </li>
              </ol>

              <div class="spacer"></div>
              <figure class="card_image">
                <figcaption>tip into your pressure cooking pot</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-stroganoff-in-pressure-cooker-pot.webp"
                  alt="beef stroganoff in pressure cooker pot"
                  title="beef stroganoff in pressure cooker pot for Nutty's beef stroganoff"
                />
              </figure>
              <div class="spacer"></div>

              <ol start="14">
                <li>
                  cook it in a pressure cooker for 20 minutes on meat &mdash; or
                  on the hob set to low for an hour until tender
                </li>
                <li>get a suitable oven dish bake @ 160c for 30 minutes</li>
              </ol>

              <div class="spacer"></div>

              <figure class="card_image">
                <figcaption>beef stroganoff</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-stroganoff-in-casserole-dish.webp"
                  alt="beef stroganoff baked in a casserole dish"
                  title="beef stroganoff baked in a casserole dish straight from the oven"
                />
              </figure>
              <div class="spacer"></div>

              <h2>Serving suggestion</h2>
              <p><strong>Beef stroganoff</strong></p>
              <p>
                Now I had my mind set on pasta! But I live with a Yorkshire man,
                so it was mashed potatoes again! What is it with Yorkshire men &
                mash! Bang goes my calory reduction again.
              </p>

              <figure class="card_image">
                <figcaption>beef stroganoff & mash</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-stroganoff-and-mash-ready-to-serve-03.webp"
                  alt="beef stroganoff and mash ready to serve"
                  title="beef stroganoff and mash ready to serve"
                />
                <figcaption>...ready to serve!</figcaption>
              </figure>
              <div class="spacer"></div>

              <figure class="card_image_round">
                <figcaption>beef stroganoff & mash</figcaption>
                <img
                  src="/images/beef-stroganoff/640x366/beef-stroganoff-and-mash-03.webp"
                  alt="beef stroganoff and mash"
                  title="beef stroganoff and mash served in a dish"
                />
                <figcaption>...ready to eat!</figcaption>
              </figure>
              <div class="spacer"></div>

              <p>
                I loved this dish so much that there was none left after just
                two of us sat down to eat. I guess we ate for three or four!
              </p>
              <p>
                I hope you enjoy it as much as we did here at Nutty's Kitchen
                :¬)
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
                    href="https://www.nuttyskitchen.co.uk/porksupreme.html"
                    class="underline"
                    >pork supreme
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