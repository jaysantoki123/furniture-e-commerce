<?php
$page = 'login';
include 'header.php';
?>
<script src="js/validation.js"></script>
<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Forgot Password</h1>
          <p class="mb-4">Welcome back! Please login to your account.</p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-img-wrap">
          <!-- Optional: You can put an image here or leave it empty -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->


<!-- Start Login Form -->
<div class="untree_co-section">
  <div class="container">

    <div class="block">
      <div class="row justify-content-center">


        <div class="col-md-8 col-lg-8 pb-4">

          <form action="index.php">
            <div class="form-group">
              <label class="text-black" for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" data-validation="required email">
              <span id="email_error"></span>
            </div>

            <button type="submit" class="btn btn-primary-hover-outline mt-3">Send Link</button>
          
          </form>

        </div>

      </div>

    </div>

  </div>


</div>
</div>

<!-- End Login Form -->

<?php include 'footer.php'; ?>