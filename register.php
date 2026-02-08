<?php 
$page = 'register';
include 'header.php'; 
?>

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Register</h1>
								<p class="mb-4">Create a new account to get started.</p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		
		<!-- Start Register Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">

              <form>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="fname">First name</label>
                      <input type="text" class="form-control" id="fname">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="text-black" for="lname">Last name</label>
                      <input type="text" class="form-control" id="lname">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="text-black" for="email">Email address</label>
                  <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
                
                <div class="form-group mb-5">
                  <label class="text-black" for="confirm_password">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm_password">
                </div>

                <button type="submit" class="btn btn-primary-hover-outline">Register</button>
                <div class="mt-3">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Register Form -->

<?php include 'footer.php'; ?>
