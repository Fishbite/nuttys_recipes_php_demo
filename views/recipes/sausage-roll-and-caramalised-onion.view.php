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
        <em>When is a sausage roll, not a sausage roll? When its Nutty's huge
          <strong>Sausage Roll & Caramalised Onion</strong>
          <strong>log</strong>! This cook's nuts!</em>...say's the editor!
      </p>
      <p>
        Christmas is nearly upon us! So, what better than making your own
        <strong>Sausage Roll & Caramalised Onion</strong>
        <strong>log</strong>. Yes! I do mean a <strong>LOG</strong>, one big,
        <em>humongous</em>, sausage roll! Firstly, check the size of your
        biggest baking tray, one that can accomodate the monster....I'm making
        this easy so you have plenty of time to make a home made Tomato
        Chutney too! :-P Ready rolled pastry, two packs of sausages and
        caramalised onions, simple!
      </p>

      <!-- Second paragraph after the page title -->
      <p>
        Click the <b>Method</b> tab below to see a step-by-step guide on how
        to make this <strong>Sausage roll & caramalised onion</strong> log,
        along with some pictures as a guide.
      </p>
    </header>

    <!-- class about-center = set columns -->
    <!-- class section-center = set width -->
    <div class="about-center section-center">
      <!-- first image on the page sits underneath the 1st & 2nd paragraphs -->
      <article class="about-img">
        <img src="/images/sausage-roll-and-caramalised-onion/650x366/cooked-sausage-roll.webp" alt="cooked sausage roll"
          title="cooked sausage roll & caramalised onion" />
      </article>

      <article class="about">
        <!-- buttons container -->
        <div class="btn-container">
          <!-- class active = show content -->
          <button title="Click this tab to reveal the ingredients" class="tab-btn active" data-id="ingredients">
            ingredients
          </button>
          <button title="Click this tab to read the recipe method and see pictures of how to make this dish"
            class="tab-btn" data-id="method">
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
            <h2>feeds a small army!</h2>

            <h2>For the caramalised onions</h2>

            <ul>
              <li>1 Tbsp olive oil</li>
              <li>15g unsalted butter</li>
              <li>2 red onions, finely chopped</li>
              <li>2 garlic cloves, finely chopped</li>
              <li>2 Tbsp balsamic vinegar</li>
            </ul>

            <div class="spacer"></div>

            <h2>For the sausage roll</h2>
            <ul>
              <li>2 packs of your favorite sausages*</li>
              <li>1 pack of pre-rolled puff pastry</li>
            </ul>
            <p>
              *I tend to go for cumberland they have the perfect mix of
              seasoning
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
              I've made this as simple as possible, shop bought, all butter,
              ready rolled flakey puff pastry! Two packs of sausages! Yep!
              Yep! Yep!
            </p>
            <p>
              The first thing you need to do is get those onions on to
              caramalise. While those are cooking, you can get everything else
              ready.
            </p>

            <p>
              So, gather the ingredients for the caramalised onions and let's
              begin!
            </p>

            <!-- Method List Goes Below Here!!! -->

            <h2>Method for the onions</h2>

            <ol>
              <li>heat the oil & melt the butter over a low heat in a pan</li>
              <li>
                add onions & cook until soft, translucent & slightly
                caramalised
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>caramalise the onions</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/onions-caramalising.webp"
                alt="onions carmalising" title="onions carmalising for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="3">
              <li>
                add garlic & balsamic vinegar &mdash; cook until the vinegar
                has reduced to virtually nothing &mdash; about 20 mins
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>add the garlic</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/onions-caramalising-garlic-added.webp"
                alt="onions carmalising garlic added"
                title="onions carmalising, garlic added for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="4">
              <li>remove from the heat</li>
              <li>tip onto kitchen paper & allow to cool</li>
            </ol>

            <div class="spacer"></div>

            <h2>Method for the sausage roll</h2>

            <ol>
              <li>take both packs of sausages & remove the skins</li>
              <li>
                simply take a sharp knife and slice each from top to bottom
              </li>
              <li>pull the skin off the meat</li>
              <li>
                wrap in cling film and coax them together to form a sausage
                meat pate
              </li>
              <li>
                use your hands to stretch it out to form one huge sausage
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>form a huge sausage</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/sausage-filling-wrapped.webp"
                alt="sausage filling wrapped" title="sausage filling wrapped for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="6">
              <li>
                place your pastry next to the sausage meat and be sure you
                have enough length to slightly over fill, so you have spare
                sausage meat at the end to tuck in
              </li>
              <li>unwrap your pastry, place your sausage in the center</li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>place sausage on pastry</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/sausage-filling-on-pastry.webp"
                alt="sausage filling on pastry"
                title="sausage filling on pastry for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="8">
              <li>add your cooled onions on one side of the sausage meat</li>
              <li>
                egg wash all visable pastry on the inside edge & wrap the
                sausage
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>wrap the sausage</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/wrapping-filling-in-pastry.webp"
                alt="wrapping filling in pastry"
                title="wrapping filling in pastry for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start=" 10">
              <li>
                push the sausage meat in @ the ends to form the perfect BIG
                sausage
              </li>
              <li>
                now take a fork to the pastry join & completely seal
                everything in
              </li>
              <li>score the top of the pastry at an angle</li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>score the pastry</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/raw-sausage-roll-scored.webp"
                alt="raw sausage roll scored" title="raw sausage roll scored for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="13">
              <li>
                egg-wash the upper side & season well with salt & pepper
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>egg-wash the top</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/raw-sausage-roll-egg-washed.webp"
                alt="raw sausage roll egg washed"
                title="raw sausage roll egg washed for sausage roll & caramalised onion" />
            </div>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>season with salt & pepper</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/raw-sausage-roll-seasoned.webp"
                alt="raw sausage roll seasoned"
                title="raw sausage roll seasoned for sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <ol start="14">
              <li>
                bake @ 180c for 45 minutes turning the tray occasionally to
                ensure an even bake
              </li>
              <li>
                once baked, leave to cool on a baking sheet for at least 30
                minutes, or, it will just crumble and fall apart when you try
                to cut it!
              </li>
            </ol>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>allow to cool for a while</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/cooked-sausage-roll.webp"
                alt="cooked sausage roll" title="cooked sausage roll & caramalised onion" />
            </div>
            <div class="spacer"></div>

            <p>
              <strong>Check for doneness</strong>: Use a meat thermometer, if
              you have one, and insert into the middle of the roll,
              temperature should be 75&deg;C to 80&deg;C. If you don't have a
              meat thermometer, insert a sharp knife into the center of the
              sausage roll for a few seconds, pull it out and touch the back
              of your hand, it should be too hot to keep it there!
            </p>

            <h2>Serving suggestion</h2>
            <p>
              <strong>Sausage Roll & Caramalised Onion</strong> Now this is
              easy, a fork ;-0 and some of my home made tomato chutney. Guess
              what? I made that on the same day too & never even broke out
              into Nutty's stess mode! Admittedly, we had some shoe string
              fries, as waiting for the sausage roll to cool was torture!
            </p>

            <div class="spacer"></div>
            <div class="card_image">
              <figcaption>serve while warm...</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/sausage-roll-slices-and-chutney.webp"
                alt="sausage roll slices and chutney"
                title="sausage roll & caramalised onion slices with homemade tomato chutney" />
              <figcaption>...with home made tomato chutney</figcaption>
            </div>
            <div class="spacer"></div>

            <div class="spacer"></div>
            <div class="card_image_round">
              <figcaption>or cold!</figcaption>
              <img src="/images/sausage-roll-and-caramalised-onion/650x366/sausage-roll-sliced.webp"
                alt="sausage roll sliced"
                title="cooked sausage roll & caramalised onion with homemade tomato chutney" />
              <figcaption>...with home made tomato chutney</figcaption>
            </div>
            <div class="spacer"></div>

            <p>
              Here's my
              <a href="/recipes/tomato-chutney" target="_blank" class="underline"><strong>Tomato Chutney Recipe</strong></a>.
              This is really easy to make too. So, if you have a few guests
              to please, you can wow them all the way back from Gregg's&trade;
              LOL!
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