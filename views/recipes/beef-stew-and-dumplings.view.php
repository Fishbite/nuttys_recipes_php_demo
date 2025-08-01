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
          Now, as the nights draw in and it gets colder & colder, I crave this
          kind of dish &mdash; <strong>Beef Stew & Dumplings</strong>. As I own
          a pressure cooker, I can cut the cooking time by two hours, If you
          don't, you can still make it, but be prepare to wait :-). I made this
          with small shallots, but you can switch it up with normal sliced white
          onions. Try to use chestnut or button mushrooms, as they add so much
          to the dish. I make this the day before then place into the oven @
          160c for 45 minutes to finish off, then it is perfects! That leaves
          plenty of time to create the perfect dumplings & mashed potatoes.
        </p>

        <!-- Second paragraph after the page title -->
        <p>
          Click the <b>Method</b> tab below to see a step-by-step guide on how
          to make my <strong>Beef Stew & Dumplings</strong>, along with some
          pictures as guidance.
        </p>
      </header>

      <!-- class about-center = set columns -->
      <!-- class section-center = set width -->
      <div class="about-center section-center">
        <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
        <article class="about-img">
          <img
            src="/images/beef-stew-and-dumplings/640x366/beef-stew-and-dumplings-cooked.webp"
            alt="beef stew and dumplings cooked"
            title="beef stew and dumplings in cast iron cooking pot"
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
              <h2>Serves 4</h2>

              <h2>for the stew</h2>

              <ul>
                <li>3 Tbsp vegetable oil</li>
                <li>400g stewing steak diced to the shallots' size*</li>
                <li>1 pack chestnut or button mushrooms, thickly sliced</li>
                <li>1/2 pack small shallots peeled</li>
                <li>2 Indian bay leaves or 4 english bay</li>
                <li>2 tsp dyjon mustard</li>
                <li>1 tsp onion powder</li>
                <li>1 tsp Worcestershire sauce</li>
                <li>1 heaped Tbsp spoon bisto powder</li>
                <li>1 heaped Tbsp spoon plain flour</li>
                <li>1 red wine stock cube or, 1 glass red wine reduced</li>
                <li>1 OXO&trade; beef stock cube</li>
                <li>500ml water</li>
                <li>1 tsp salt & pepper to season the flour</li>
                <li>1 tsp pepper corns whole</li>
                <li>15 Indian long pepper corns whole - optional**</li>
                <li>
                  5 thin carrots peeled & cut to same size as the beef dice
                </li>
                <li>3 sticks of celery cut to same size as the beef dice</li>
              </ul>

              <div class="spacer"></div>

              <p>
                * I buy as 2 whole stewing steaks, as then you have control of
                the dice
              </p>
              <p>
                **Indian long peppers add a spicy fragrant note to the stew and
                are well worth investing in, but, they are purely optional
              </p>

              <h2>for the dumplings</h2>

              <ul>
                <li>150g self raising flour</li>
                <li>70g suet</li>
                <li>1/2 tsp salt</li>
                <li>3 to 5 Tbsp water</li>
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
                There are a few way to cook this dish, the long ways, or, the
                short ways. I'm using the short way, in a pressure cooker!
                However, you can simply put it in a stove top pan and cook for a
                couple of hours, or, in the oven. Whichever way you choose, just
                cook it until the braising steak is litterally falling apart,
                which is normally about two hours in a pan/oven dish, or as
                little as 30 mins in the pressure cooker! I'll then let it cool
                and develop overnight, re-heating it in the oven the next day
                and adding dumplings for the last 30 mins.
              </p>

              <p>Gather all the ingredients you need:</p>

              <div class="card_image">
                <figcaption>ingredients</figcaption>
                <img
                  src="/images/beef-stew-and-dumplings/640x366/ingredients.webp"
                  alt="ingredients"
                  title="ingredients for beef stew and dumplings"
                />
              </div>
              <div class="spacer"></div>

              <!-- Method List Goes Below Here!!! -->

              <h2>Method for the stew</h2>

              <ol>
                <li>
                  firstly, set a heavy based pan onto a high heat & add oil &
                  bay leaves
                </li>
                <li>dice the beef steaks into chunks</li>
                <li>
                  on a plate, season the flour & rub your diced beef into it
                </li>
                <li>
                  add the beef to the very hot pan & do not move it for two
                  minutes
                </li>
                <li>
                  after two minutes flip & repeat, then stir fry until it is
                  well browned
                </li>
                <li>set your beef into the cooking pot</li>
                <li>
                  turn the pan heat down & add your onions, just cook slightly
                </li>
                <li>add your onions to the cooking pot</li>
                <li>place your mushrooms into the pan and gently fry</li>
                <li>add your mushrooms to the cooking pot</li>
                <li>
                  mix bisto&trade; powder with the water add to the cooking pot
                </li>
                <li>
                  add to the cooking pot: onion powder, red wine stock*, beef
                  stock, Worcestershire sauce & mustard
                </li>
              </ol>

              <div class="spacer"></div>

              <p>
                *if using red wine it will need to be reduced to quarter of it's
                original volume. Use the same pan to deglaze all those lovely
                stuck on bits, & please only use wine you can drink! No cheap
                nasty bottles allowed!
              </p>

              <ol start="13">
                <li>
                  in your heavy based pan: fry your pepper corns & long peppers,
                  just till they smell fragrant
                </li>
                <li>add to the cooking pot</li>
                <li>add water, raw carrots & celery to the cooking pot</li>
                <li>
                  cook in a pressure cooker set to 'meat' for 30 minutes, or,
                  set covered on the stove top or oven for 2 hours @ 180c
                </li>
                <li>
                  once cooked, remove as many visable long peppers & bay leaves
                  as possible, serve with creamy mash or new potatoes
                </li>
                <li>
                  as stated at the start, I reheat mine in the oven the
                  following day @ 160c adding dumplings for the last 30 minutes
                </li>
              </ol>

              <div class="spacer"></div>

              <div class="card_image">
                <figcaption>add dumplings for last 30 mins</figcaption>
                <img
                  src="/images/beef-stew-and-dumplings/640x366/dumplings-added-to-stew.webp"
                  alt="dumplings added to stew"
                  title="dumplings added for beef stew and dumplings"
                />
              </div>

              <div class="spacer"></div>

              <h2>Method for the dumplings</h2>

              <ol>
                <li>weigh your flour, add salt stir through suet</li>
                <li>
                  make a well in the center, add 3 Tbsp water & combine, if it
                  seems too dry to create a dough, add more water
                </li>
                <li>
                  get some cling film, roll into a sausage, then remove the
                  cling film & cut into 8 pieces
                </li>
                <li>
                  flour your hands, take each piece of dough and roll into a
                  ball
                </li>
                <li>
                  top your stew with them when it has 30 minutes left to cook
                </li>
                <li>cook covered for 20 minutes @ 160c</li>
                <li>then uncovered for 10 minutes & serve</li>
              </ol>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>dumplings cooked</figcaption>
                <img
                  src="/images/beef-stew-and-dumplings/640x366/beef-stew-and-dumplings-cooked.webp"
                  alt="beef stew and dumplings cooked"
                  title="beef stew and dumplings in a cast iron pot"
                />
              </div>
              <div class="spacer"></div>

              <h2>Serving suggestion</h2>
              <p>
                <strong>Beef stew & dumplings</strong> mashed or new potatoes
                and a spoon, you will not require knives as the meat should
                simply melt in your mouth :-)
              </p>

              <div class="spacer"></div>
              <div class="card_image">
                <figcaption>serving suggestion</figcaption>
                <img
                  src="/images/beef-stew-and-dumplings/640x366/beef-stew-and-dumplings-potatoes-and-dishes.webp"
                  alt="beef stew and dumplings and dishes"
                  title="beef stew and dumplings layed out to serve"
                />
              </div>

              <div class="spacer"></div>
              <div class="card_image_round">
                <figcaption>beef stew & dumplings</figcaption>
                <img
                  src="/images/beef-stew-and-dumplings/640x366/beef-stew-and-dumplings-with-potatoes-served.webp"
                  alt="beef stew and dumplings with potatoes saved"
                  title="beef stew and dumplings served with potatoes"
                />
              </div>
              <div class="spacer"></div>

              <p>
                Packed with beef bangin' flavour, this is one nutritious winter
                warmer you shouldn't go without!
              </p>
              <p>Enjoy :¬)</p>

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
                    href="https://www.nuttyskitchen.co.uk/chorizo-cod-stew.html"
                    >chorizo cod stew
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.nuttyskitchen.co.uk/beefy-meatballs-onion-gravy.html"
                    class="underline"
                    >beefy meatballs in onion gravy
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