<!DOCTYPE html>
<html lang="en">
  <?php require __DIR__ . '/../partials/head-recipe.view.php'; ?>
  <body>
    <a href="#content" class="skip-link">Skip to Main Content</a>
    <?php require __DIR__ . '/../partials/nav-main.view.php'; ?>
    <!-- RECIPE PAGE NAVIGATION -->
    <div id="nav-container" class="nav-container"></div>
    <!-- RECIPE PAGE NAVIGATION -->

    <header class="title">
      <?php require __DIR__ . '/../partials/title-banner-recipe.view.php'; ?>

      <p class="fb-form head-p">
        We're super excited that you want to get in touch with us! Please
        provide your feedback in the form below
      </p>
    </header>

    <section class="justify">
      <!-- modify this form HTML and place wherever you want your form -->
      <!-- <h2>Feedback</h2> -->
      <!-- <p class="mb-4 small">Please provide your feedback in the form below</p> -->

      <form
        class="fb-form"
        name="feedback_form"
        id="feedback_form"
        method="post"
      >
        <div class="wrap">
          <label class="form-label" for="feedback_comments">Comments:</label>
          <textarea
            class="form-control"
            required
            rows="10"
            name="comments"
            id="feedback_comments"
            placeholder="We welcome any feedback, comments, requests or suggestions & only ask for your email address so that we can respond to you directly, it will not be used for marketing purposes or passed on to any third party"
          ></textarea>
        </div>

        <div class="row">
          <div class="wrap">
            <label class="form-label" for="feedback_name">Your Name:</label>
            <input
              type="text"
              required
              name="name"
              class="form-control"
              id="feedback_name"
            />
          </div>

          <div class="wrap row">
            <label class="form-label" for="feedback_email">Email:</label>
            <input
              type="email"
              name="email"
              required
              class="form-control"
              id="feedback_email"
            />
          </div>
        </div>

        <button type="submit" class="btn btn-success btn-lg">Post</button>
      </form>
    </section>
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>