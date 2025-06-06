<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . "/partials/head.view.php";?>

<body>
  <?php require __DIR__. '/../views/partials/nav-main.view.php';?>

  <header class="title">

    <?php require __DIR__ . '/../views/partials/title-banner.view.php'; ?>

    <p class="fb-form head-p">
      We'd love to hear your feedback, questions, recipe requests, or just
      a friendly hello. Fill in the form below, and we’ll get back to you
      as soon as possible.
    </p>
  </header>

  <section class="justify">
    <form class="fb-form" name="feedback_form" id="feedback_form" method="post">
      <div class="wrap">
        <label class="form-label" for="feedback_comments">Comments:</label>
        <textarea class="form-control" required rows="10" name="comments" id="feedback_comments"
          placeholder="We welcome any feedback, comments, requests or suggestions & only ask for your email address so that we can respond to you directly, it will not be used for marketing purposes or passed on to any third party"></textarea>
      </div>

      <div class="row">
        <div class="wrap">
          <label class="form-label" for="feedback_name">Your Name:</label>
          <input type="text" required name="name" class="form-control" id="feedback_name" />
        </div>

        <div class="wrap row">
          <label class="form-label" for="feedback_email">Email:</label>
          <input type="email" name="email" required class="form-control" id="feedback_email" />
        </div>
      </div>

      <button type="submit" class="btn btn-success btn-lg">Post</button>
    </form>
  </section>

  <?php require __DIR__ . '/../views/partials/footer.php'; ?>

  <script src="./src/app.js"></script>
  <script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?f=vani7lyv&n=n1.ratufa.io"></script>
</body>

</html>