<?php
	// Form session security
	// Start the session
	session_start();
	// Require the class
	require('formkey_class.php');
	// Start the class
	$formKey = new formKey();
	$error = False;
	// Is request?
	if($_SERVER['REQUEST_METHOD'] == 'post')
	{
		// Validate the form key
		if(!isset($_POST['form_key']) || !$formKey->validate())
		{
			// Form key is invalid, show an error
			$error = True;
		}
	}

?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
	<head>
		<title>Mojo Cycling</title>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">

	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="/styles/bootstrap.css">
	  <link rel="stylesheet" href="/styles/custom.css">
	  <link rel=icon href="/images/mojoSavedLogo.png">
			<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<!-- end head, start main body -->

	<body>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <a class="navbar-brand" href="../">
	      <img class="nav-logo" src="../images/mojoSavedLogo.png" alt="Mojo Logo">
	    </a>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	      <ul class="navbar-nav nav-pills align-items-center">
	        <li class="nav-item">
	          <a class="nav-link" href="../">Home</a>
	        </li>
	      </ul>
	    </div>
	  </nav>

<section id="contact" class="content">
		<div class="p-5 container-fluid text-white">
				<h2 class="text-center p-4">CONTACT</h2>
				<div class="row">

					<div class="col m-3">
						<p class="text-center text-light">Coming in to town and need recomendations on where to ride? Or just want to chat bikes? Drop us a line.</p>

						<p id="formResponse"><?php if($error) { echo($error); } ?></p>
							<form action="mail.php" method="POST" class="form-horizontal contact-form" id="contact-form">


								  <fieldset>
										<div class="row">
							<div class="col-sm-6 form-group has-danger has-success">
								<input class="form-control" id="inputName" name="name" placeholder="Name" type="text" required>
								<div class="invalid-feedback">
									Please provide a name.
								</div>
							</div>
							<div class="col-sm-6 form-group">
								<input class="form-control" id="inputEmail" name="email" placeholder="Email" type="email" required>
								<div class="invalid-feedback">
									Please provide a valid email.
								</div>
							</div>
						</div>
						<textarea class="form-control" id="inputMessage" name="comments" placeholder="Comment" rows="5"></textarea><br>
						<div class="row">
							<div class="col-sm-6 form-check text-center">
								 <label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="check1" value="Sign me up for the POD!">
								Sign me up for the POD!</label>
							</div>
							<!-- <div class="g-recaptcha" data-sitekey="6Le7CVYUAAAAAM7cIiUbXAfNq_lqgtDWG0S0kpiP"></div> -->
								<div class="col-sm-6 form-group text-center">
									<button class="btn btn-danger" type="submit" value="Send">Send!</button>

								</div>
							</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
</section>

<!-- UPDATED FOOTER -->
  <footer>

    <div class="container-fluid bg-dark p-4">
      <div class="row">
        <div class="col-md">
          <ul class="list-group text-dark h-100">
            <li class="list-group-item">
              <h5>Hours:</h5>
            </li>
            <li class="list-group-item justify-content-between">
              MON-FRI:
              <span class="badge badge-default badge-pill">11am - 7pm</span>
            </li>
            <li class="list-group-item justify-content-between">
              Saturday:
              <span class="badge badge-default badge-pill">11am - 5pm</span>
            </li>
            <li class="list-group-item justify-content-between">
              Sunday:
              <span class="badge badge-default badge-pill">Closed</span>
            </li>
          </ul>
        </div>
        <div class="col-md">
          <div class="h-100">
            <ul class="list-group text-dark">
              <li class="list-group-item justify-content-between">
                <h5>Location:</h5>
              </li>
              <li class="list-group-item justify-content-between">
                <i class="fa fa-map-marker" aria-hidden="true">
                       <a href="https://www.google.com/maps/place/Mojo+Cycling/@36.34927,-94.211372,15z/data=!4m5!3m4!1s0x0:0x60369447f715997e!8m2!3d36.34927!4d-94.211372" target="_blank">
                         <strong>2104 S Walton Blvd, Bentonville, AR 72712</strong>
                       </a>
                      </i>
              </li>
              <li class="list-group-item justify-content-between">
                <i class="fa fa-envelope-square" aria-hidden="true">
                      <a href="mailto:mojobicycles@gmail.com">
                        <strong>mojobicycles@gmail.com</strong>
                     </a>
                   </i>
              </li>
              <li class="list-group-item justify-content-between">
                <i class="fa fa-phone" aria-hidden="true">
                      <a href="tel:4792717201">
                        <strong>479-271-7201</strong>
                     </a>
                   </i>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="h-100">
            <ul class="list-group">
            <li class="list-group-item justify-content-between">
              <h5>Trail Info:</h5>
            </li>
            <li class="list-group-item justify-content-between"><a href="http://oztrailsnwa.com/" target="_blank">Oz Trails NWA</a></li>
            <li class="list-group-item justify-content-between"><a href="http://www.bellavistaar.gov/theback40/" target="_blank">Bella Vista Back 40</a></li>
            <li class="list-group-item justify-content-between"><a href="https://ozarkcyclingadventures.com/" target="_blank">Ozark Cycling Adventures</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-md-4 p-4">
          <button class="btn btn-danger" onclick="topFunction()" id="myBtn" title="Go to top" href="#home">Top</button>
        </div>

        <div class="col-md-4 p-4 text-center">
          <p class="text-white">Socialize with us!</p>
          <a href="https://www.facebook.com/Mojo-Cycling-112323148829043/" target="_blank"><i class="fa fa-facebook-square fa-3x social"></i></a>
          <a href="https://www.instagram.com/mojobicycles" target="_blank"><i class="fa fa-instagram fa-3x social"></i></a>
          <a href="https://www.youtube.com/user/MojoCycling" target="_blank"><i class="fa fa-youtube-square fa-3x social"></i></a>
          <a href="https://twitter.com/MojoCycling" target="_blank"><i class="fa fa-twitter-square fa-3x social"></i></a>
        </div>

        <div class="col-md-4">

        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="row">
        <span class="copyright mx-auto text-white">
          <small>&copy; Copyrite 2018 Mojo Cycling</small>
        </span>
      </div>
    </div>
  </footer>


		<!-- javascript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	    <script src="js/jquery.validate.min.js"></script>
	    <script>

	    	// contact form validation
	    	$(document).ready(function(){

	         $('#contact-form').validate(
		         {
		          rules: {
		            name: {
		              minlength: 3,
		              required: true
		            },
		            email: {
		              required: true,
		              email: true
		            },

		            subject: {
		              minlength: 3,
		              required: true
		            },
		            message: {
		              minlength: 20,
		              required: true
		            }
		          },
		          highlight: function(label) {
		            $(label).closest('.control-group').addClass('error');
		          },
		          success: function(label) {
		            label
		              .text('OK!').addClass('valid')
		              .closest('.control-group').addClass('success');
		          }
		         });

		    	// contact form submission, clear fields, return message
		    	$("#contact-form").submit(function() {
				    $.post('mail.php', {name: $('#inputName').val(), email: $('#inputEmail').val(), phone: $('#inputPhone').val(), type: $('#selectSubject').val(), message: $('#inputMessage').val(), recaptcha_challenge_field: $('#recaptcha_challenge_field').val(), recaptcha_response_field: $('#recaptcha_response_field').val(), contactFormSubmitted: 'yes'}, function(data) {
				        $("#formResponse").html(data).fadeIn('100');
				        $('#recaptcha_response_field').val(''); /* Clear the inputs */
				    }, 'text');
				    return false;
				});

			}); // end document.ready
	    </script>
	</body>

</html>
