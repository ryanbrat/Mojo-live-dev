<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		$check = $_POST['check'];
		if ($check != 'Yes') {
		    $check = 'No';
		}


		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'mojobicycles.com';
				$subject = 'You have a message from Mojocylcing.com';
				$body = '
					<h4>Name:</h4><p>'.$name.'</p>
					<h4>Email:</h4><p>'.$email.'</p>
					<h4>Message:</h4><p>'.$message.'</p>
					<h4>POD Signup Request:</h4><p>'.$check.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your message has been sent!';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your message was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NHNCLVW');</script>
  <!-- End Tag Manager -->
  <title>Mojo Cycling</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../styles/bootstrap.css">
  <link rel="stylesheet" href="../styles/custom.css">
  <link rel=icon href="../images/mojoSavedLogo.png">
</head>

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



    <div id="contact" class="p-5 container-fluid text-white w-100 mx-auto">
			<h2 class="text-center p-4">CONTACT</h2>
			<div class="row">

				<div class="mx-auto w-80">
					<p class="text-center text-light">Coming in to town and need recomendations on where to ride? Or just want to chat bikes? Drop us a line.</p>

    	<?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	<?php endif; ?>

      	<form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

	      <div class="form-group has-danger has-success">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
	      </div>
	      <div class="form-group has-danger has-success">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
	      </div>
	      <div class="form-group has-danger has-success">
	      	<label>Message</label>
	      	<textarea name="message" class="form-control" required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
	      </div>
				<div class="form-group">
					 <label class="check" for="type1">
					<input type="checkbox" class="form-control" name="check" value="Yes">
						Sign me up for the POD!</label>
						<span class="text-italic">Our daily newsletter</span>
				</div>
	    	<br>
	      <button type="submit" name="submit" class="btn btn-danger">Submit</button>
      </form>

</div>
</div>
</div>


		<!-- Footer -->
	  <footer>
	    <!-- UPDATED FOOTER -->
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

	        </div>

	        <div class="col-md-4 p-4 text-center">
	          <p class="text-white">Socialize with us!</p>
	          <a href="https://www.facebook.com/Mojo-Cycling-112323148829043/" target="_blank"><i  class="fa fa-facebook-square fa-3x social"></i></a>
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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	  <script src="../scripts/main.js"></script>
	</body>

	</html>
