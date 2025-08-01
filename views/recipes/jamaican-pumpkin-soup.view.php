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
          Nutty's <strong>Jamaican Pumpkin Soup</strong> is no ordinary bowl of
          comfort — it's a cauldron of culinary chaos, blended into smooth
          velvety perfection! The roasted pumpkin, blackened at the edges like
          it's been kissed by the flames of mischief, oozes a deep, caramelised
          sweetness. But don't get too cosy — there's a fiery little Scotch
          Bonnet lurking in the pot, ready to slap your taste buds awake with
          its fruity heat! A riot of scallions, onions, and garlic join the
          madness, while a whisper of thyme keeps things just about civilised.
          Tender little bits of chicken dissolve into the mix, leaving behind
          pure, silky richness.
        </p>
        <p>
          But here's the twist — pumpkins, those elusive orange beauties, only
          grace us once a year around Halloween. No need to weep into your empty
          bowl, though — happily, butternut squash steps in as a worthy
          substitute, bringing just as much warmth and sweetness to the madness
          &#127875;&#128293;
        </p>
        <p>
          Spoon in at your own risk — this soup is pure Nutty magic! Inspired by
          all those wondeful Jamaican take-aways that we have here in the UK,
          especially Mama's Kitchen of Hemel Hempstead that used to be - come
          back we miss you!
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make <strong>Jamacain Pumpkin Soup</strong> along with some
          pictures as a guide.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/jamaican-pumpkin-soup/650x366/jamaican-pumpkin-soup-in-dish.webp"
            alt="stock added to roasting dish"
            title="stock added to roasting dish for Jamaican Pumpkin Soup"
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
              <h2>serves 6 - 8</h2>
              <ul>
                <li>Roast pumpkin (sliced eighths) for about 1 hour</li>
                <li>3 Scallion - finely chopped</li>
                <li>1 Onion - finely chopped</li>
                <li>1 Scotch Bonnet - finely chopped</li>
                <li>1tsp Thyme</li>
                <li>5 Garlic - finely chopped</li>
                <li>1 Chicken breast (cut into very small pieces)</li>
                <li>1 - 2 OXO&trade; chicken stock cubes</li>
                <li>plenty of water - about 1 - 1.5 litres</li>
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
                So gather your ingredients so that everything is to hand, it's
                so easy to miss something especially if you are a little nuts
                like me :-)
              </p>
              <p>
                First things first, you need to tackle the pumpkin or butternut
                squash that you are using, I'll just refer to it as a squash
                from this point on as it really doesn't matter which you use.
                You'll need a large sharp knife and a bit of muscle power!
              </p>
              <p>
                Carefully cut the squash into two pieces, avoid cutting through
                the stem as that is really hard. Next, take a spoon and scrape
                out all the seeds and fluffy bits from the center of the squash.
              </p>
              <p>
                Once your two halves are cleaned out, cut each half into
                quarters. Place the quarters on a baking tray and drizzle with a
                little oil and sprinkle with a little salt. Place in a
                pre-heated oven at 180C for about an hour. You want the squash
                to be soft and slightly caramelised at the edges.
              </p>
              <p>
                While the squash is roasting, you can get the rest of the
                ingredients ready and cooked
              </p>
              <p>
                Make sure to use all of the scallion, white and green bits, as
                this is an important flavour in jamaican cooking roots.
                Foundation of flavour is all in the roots of the cuisine you're
                cooking. Not available or understandable from a box! Ya have to
                understand it and adjust it to your taste! Luckily I did that
                work! Authenticity in food is really important to me. That is
                why I am Nutty!
              </p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <ol>
                <li>place the pieces of squash on a baking tray / oven-dish</li>
                <li>drizzle with a little oil & a pinch of salt</li>
                <li>
                  roast in a pre-heated oven @ 180&deg;C for about an hour
                </li>
                <li>
                  remove from the oven and allow to cool when lovely and soft
                  with slightly caramelised, blackened edges.
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>roast the pumpkin</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/sliced-pumpkin-in-oven-dish.webp"
                  alt="sliced pumpkin in oven dish"
                  title="sliced pumpkin in oven dish for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="5">
                <li>
                  finely chop the garlic, scallions, onion & scotch bonnet
                </li>
                <li>place the garlic in a slightly oiled med-hot pan</li>
                <li>
                  stir fry until soft then add the rest of the chopped veg
                </li>
                <li>add 1 tsp salt</li>
                <li>
                  saute until soft while stirring frequently so as not to brown
                  the onions too much
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>saute the veg</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/veg-frying.webp"
                  alt="veg frying"
                  title="veg frying for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="10">
                <li>move the veg to the edges of the pan</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>move veg to the edge!</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/fried-veg-around-pan-edge.webp"
                  alt="fried veg around pan"
                  title="fried veg around pan for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="11">
                <li>add the diced chicken to the pan and seal all over</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>seal the chicken</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/sealing-diced-chicken-with-veg.webp"
                  alt="sealing diced chicken with veg"
                  title="sealing diced chicken with veg for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="12">
                <li>combine the chicken with the veg when sealed</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>combine with the veg</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/diced-chicken-mixed-with-veg.webp"
                  alt="diced chicken mixed with veg"
                  title="diced chicken mixed with veg for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>add thyme & crumble in a stock cube</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/spices-added-to-chicken-and-veg.webp"
                  alt="spices added to chicken and veg"
                  title="spices added to chicken and veg for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="13">
                <li>add thyme & crumble in a chicken stock cube</li>
                <li>put all everything into an oven top pan</li>
                <li>add enough water to cover everything and a bit more</li>
                <li>
                  remove the cooled flesh of the squash from the skin & add to
                  the pan
                </li>
                <li>
                  stir & cook on a simmer for 10 - 15mins until the chicken is
                  cooked
                </li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>cover with plenty of water</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/stock-added-to-roasting-dish.webp"
                  alt="stock added to roasting dish"
                  title="stock added to roasting dish for Jamaican Pumpkin Soup"
                />
              </div>
              <div class="spacer"></div>

              <ol start="18">
                <li>finally, blend the soup until smooth*</li>
                <li>
                  taste the soup & season with salt to taste, this should
                  balance the sweetness of the squash & enhance the flavour of
                  the rest of the ingredients
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                *I use a metal stick blender, as the last time I used a plastic
                one, the plastic went soft and deformed with the heat. I
                couldn't use that blender again as the blades damaged any pan I
                tried to use it in! Ho! Hum! We live and learn :-) *Editor
                altered this; HE DID THAT! Nutty knows plastic and hot do not
                mix..*
              </p>
              <p>
                Alternatively, carefully tip the soup into a blender and blitz
                until you have a silky smooth consistency.
              </p>

              <div class="card_image">
                <figcaption>Jamaican Pumpkin Soup</figcaption>
                <img
                  src="/images/jamaican-pumpkin-soup/650x366/jamaican-pumpkin-soup-in-dish.webp"
                  alt="jamaican pumpkin soup in dish"
                  title="Jamaican Pumpkin Soup in a dish"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Sweet, smokey, herby flavours with an eye popping fruity heat
                that brings out a smile with every mouthful. It's one of those
                dishes that you first put into your mouth and think, that's a
                little sweet, then the rest of the flavours start popping out
                and dancing a merry riot on your taste buds :-) Enjoy the chaos!
              </p>
              <p>
                A perfect start to a jerked chicken dinner or Jamaican curry
                with macaroni pie. Or, just to enjoy on its own as complete
                comforting happiness.
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
                    href="https://www.nuttyskitchen.co.uk/celeriac-soup.html"
                    >celeriac soup
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/chickensoup.html"
                    class="underline"
                    >grandma's chicken soup
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