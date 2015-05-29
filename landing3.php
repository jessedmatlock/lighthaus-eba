<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Online Executive Business Networking | EBA</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="revivemarketing.org" />
	<meta name="keywords" lang="en-us" content="online networking, online business networking, online executive networking, virtual networking, ceo networking, ceo peer groups, ceo networking groups, online business networking, entrepreneur networking" />
	<meta name="date" content="2015-01-01T08:49:37+00:00" />
	<meta name="description" content="EBA is an online executive business networking group that connects executives and CEOs, and gives them the online tools to network and make connections to grow their business and achieve their business goals." />
	<meta name="robots" content="index, follow" />
	<meta name="copyright" content="Copyright © 2015 All Rights Reserved" />
	<meta name="google-site-verification" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<link href="img/startup.png" rel="apple-touch-startup-image" />
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="img/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="img/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="img/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,500,700' rel='stylesheet' type='text/css'>
	<link media="screen,print" rel="stylesheet" href="css/ui/jquery-ui-1.10.4.custom.css" />
	<link media="screen,print" rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>

	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<section id="landing-intro" class="short-intro">
		<div class="row">
		    <div class="small-12 medium-12 large-12 columns">
				<img src="img/logo.png"  class="" id="logo"  alt="" />
				<h1 class="">See Why We Mean Business!</h1>
		    </div><!-- end columns -->
		</div><!-- end row -->
	</section><!-- end section #landing-intro. -->	
	
	<section id="apply" class="blue">
		<div class="row">
		    <div class="small-12 medium-12 large-8 columns large-push-4">
				<h1 class="text-center">Apply For Membership Today</h1>
				<p class="text-center">Enter your contact information below to connect with the EBA.</p>
				<?php if(!isset($_POST['submit'])):  ?>
				<form action="#apply" method="POST" accept-charset="utf-8" data-abide enctype="multipart/form-data">
					<div class="row">
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="fname"  id="fname" value="" placeholder="FIRST NAME" required pattern="[a-zA-Z]+" />
					  		<small class="error">A valid First Name is required.</small>
						</label>
					    </div><!-- end columns -->
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="lname"  id="lname" value="" placeholder="LAST NAME" required pattern="[a-zA-Z]+" />
						  	<small class="error">A valid Last Name is required.</small>
						</label>
					    </div><!-- end columns -->
					</div><!-- end row -->
					
					<div class="row">
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="workphone"  id="workphone" value="" placeholder="WORK PHONE" />
					    </div><!-- end columns -->
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="cellphone"  id="cellphone" value="" placeholder="CELL PHONE" />
					    </div><!-- end columns -->
					</div><!-- end row -->
					
					<div class="row">
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="city"  id="fname" value="" placeholder="CITY" required pattern="[a-zA-Z]+" />
					  		<small class="error">A valid City is required.</small>
						</label>
					    </div><!-- end columns -->
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <select name="state" id="state" class="select" required>
								<option value="" selected="selected">STATE</option> 
								<option value="AL">Alabama</option> 
								<option value="AK">Alaska</option> 
								<option value="AZ">Arizona</option> 
								<option value="AR">Arkansas</option> 
								<option value="CA">California</option> 
								<option value="CO">Colorado</option> 
								<option value="CT">Connecticut</option> 
								<option value="DE">Delaware</option> 
								<option value="DC">District Of Columbia</option> 
								<option value="FL">Florida</option> 
								<option value="GA">Georgia</option> 
								<option value="HI">Hawaii</option> 
								<option value="ID">Idaho</option> 
								<option value="IL">Illinois</option> 
								<option value="IN">Indiana</option> 
								<option value="IA">Iowa</option> 
								<option value="KS">Kansas</option> 
								<option value="KY">Kentucky</option> 
								<option value="LA">Louisiana</option> 
								<option value="ME">Maine</option> 
								<option value="MD">Maryland</option> 
								<option value="MA">Massachusetts</option> 
								<option value="MI">Michigan</option> 
								<option value="MN">Minnesota</option> 
								<option value="MS">Mississippi</option> 
								<option value="MO">Missouri</option> 
								<option value="MT">Montana</option> 
								<option value="NE">Nebraska</option> 
								<option value="NV">Nevada</option> 
								<option value="NH">New Hampshire</option> 
								<option value="NJ">New Jersey</option> 
								<option value="NM">New Mexico</option> 
								<option value="NY">New York</option> 
								<option value="NC">North Carolina</option> 
								<option value="ND">North Dakota</option> 
								<option value="OH">Ohio</option> 
								<option value="OK">Oklahoma</option> 
								<option value="OR">Oregon</option> 
								<option value="PA">Pennsylvania</option> 
								<option value="RI">Rhode Island</option> 
								<option value="SC">South Carolina</option> 
								<option value="SD">South Dakota</option> 
								<option value="TN">Tennessee</option> 
								<option value="TX">Texas</option> 
								<option value="UT">Utah</option> 
								<option value="VT">Vermont</option> 
								<option value="VA">Virginia</option> 
								<option value="WA">Washington</option> 
								<option value="WV">West Virginia</option> 
								<option value="WI">Wisconsin</option> 
								<option value="WY">Wyoming</option>
								</select>
							  	<small class="error">A valid State is required.</small>
							</label>
					    </div><!-- end columns -->
					</div><!-- end row -->
					
					<div class="row">
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="industry"  id="industry" value="" placeholder="INDUSTRY" required pattern="[a-zA-Z]+" />
  							<small class="error">A valid Industry is required.</small>	
						</label>				
					    </div><!-- end columns -->
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="company"  id="company" value="" placeholder="COMPANY" required pattern="[a-zA-Z0-9]+" />
  							<small class="error">A valid Company Name is required.</small>
						</label>
					    </div><!-- end columns -->
					</div><!-- end row -->
					
					<div class="row">
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="jobtitle"  id="jobtitle" value="" placeholder="JOB TITLE" required pattern="[a-zA-Z]+" class="no-margin" />
						  	<small class="error">A valid Job Title is required.</small>
						</label>
					    </div><!-- end columns -->
					    <div class="small-12 medium-6 large-6 columns">
						<label>
					        <input type="text" name="email"  id="email" value="" placeholder="EMAIL ADDRESS" required pattern="^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$" class="no-margin" />
 							<small class="error">A valid Email Address is required.</small>
						</label>
					    </div><!-- end columns -->
					</div><!-- end row -->
					<div class="row">
						<div class="small-12 medium-12 large-12 columns">
							<small><i class="fa fa-lock"></i> We are anti-spam and don’t share the information you provide.</small>
							<br /><br />
						</div>
					    <div class="small-12 medium-12 large-12 columns text-center">
					        <button id="submit" name="submit" class="button cta-button">SUBMIT APPLICATION</button>
					    </div><!-- end columns -->
					</div><!-- end row -->
					
				</form>
				<?php else:
					
					$fname = isset($_POST['fname']) ? stripslashes(trim($_POST['fname'])) : '';
					$lname = isset($_POST['lname']) ? stripslashes(trim($_POST['lname'])) : '';
					$workphone = isset($_POST['workphone']) ? stripslashes(trim($_POST['workphone'])) : '';
					$cellphone = isset($_POST['cellphone']) ? stripslashes(trim($_POST['cellphone'])) : '';
					$city = isset($_POST['city']) ? stripslashes(trim($_POST['city'])) : '';
					$state = isset($_POST['state']) ? stripslashes(trim($_POST['state'])) : '';
					$industry = isset($_POST['industry']) ? stripslashes(trim($_POST['industry'])) : '';
					$company = isset($_POST['company']) ? stripslashes(trim($_POST['company'])) : '';
					$jobtitle = isset($_POST['jobtitle']) ? stripslashes(trim($_POST['jobtitle'])) : '';
					$email = isset($_POST['email']) ? stripslashes(trim($_POST['email'])) : '';
					$pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
					// catch header injection
				    if (preg_match($pattern, $fname) || preg_match($pattern, $lname) || preg_match($pattern, $email)) {
				        die("Header injection detected");
				    }

					$headers  = 'MIME-Version: 1.1' . PHP_EOL;
			        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
			        $headers .= "From: $fname $lname <$email>" . PHP_EOL;
			        $headers .= "Return-Path: $email" . PHP_EOL;
			        $headers .= "Reply-To: $email" . PHP_EOL;
			        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
					//$EmailTo = "jesse@revivemarketing.org";					
					$EmailTo = "donnafurno@gmail.com, kfdaly@yahoo.com, glenn@lighthausdesign.com";
					$Subject = "Landing Page Contact";

					// IF names or email is missing, they may have JS off... present an error message
				    if (($fname=="")||($lname=="")||($email=="")) {
						echo "First, Last Name and Email Fields are required, please fill out the form again.";
					// ELSE.. Let's create the message content and prepare to send it	
				    } else {        
						$Body = "";
						$Body .= "<strong>Name:</strong> ";
						$Body .= $fname.' '.$lname;
						$Body .= "<br/>";
						if($workphone !== ""){
							$Body .= "<strong>Work Ph:</strong> ";							
							$Body .= $workphone;
							$Body .= "<br/>";						
						}
						if($cellphone !== ""){
							$Body .= "<strong>Cell Ph:</strong> ";							
							$Body .= $cellphone;
							$Body .= "<br/>";						
						}
						$Body .= "<strong>City & State:</strong> ";
						$Body .= $city.', '.$state;
						$Body .= "<br/>";												
						$Body .= "<strong>Industry:</strong> ";
						$Body .= $industry;
						$Body .= "<br/>";												
						$Body .= "<strong>Company:</strong> ";
						$Body .= $company;
						$Body .= "<br/>";												
						$Body .= "<strong>Job Title:</strong> ";
						$Body .= $jobtitle;						
						$Body .= "<br/>";
						$Body .= "<strong>Email:</strong> ";
						$Body .= $email;
						$Body .= "<br/>";

						// send email 
						$success = mail($EmailTo, $Subject, $Body, $headers);

						// redirect to success page 
						if ($success){
						  echo '<div class="panel radius callout">Your information was successfully sent. Thank you!</div>';
						} else{
						  echo '<div class="panel radius">There was an error and we have been notified.</div>';
						}
				    } ?>
				<?php endif; ?>
		    </div><!-- end columns -->
			<div class="small-12 medium-12 large-4 columns large-pull-8">

				<div class="row">
				    <div class="small-12 medium-4 large-12 columns">
				        <h4 class="">EXPAND YOUR NETWORK</h4>
						<p>Build your circle of influence and develop lasting business partnerships</p>
				    </div><!-- end columns -->
				    <div class="small-12 medium-4 large-12 columns">
				        <h4 class="">INCREASE YOUR VALUE</h4>
						<p>Learn from highly experienced and successful industry insiders, leverage their knowledge to further your own success.</p>
				    </div><!-- end columns -->
				    <div class="small-12 medium-4 large-12 columns">
				        <h4 class="">GROW PROFESSIONALLY</h4>
						<p>Access our business mentorship specialists and essential member resources.</p>
				    </div><!-- end columns -->
				</div><!-- end row -->

			</div><!-- end columns -->		    
		
		    
		</div><!-- end row -->
	</section><!-- end section #.blue -->
	
	<section id="footer" class="tan">
		<div class="row">
		    <div class="small-12 medium-12 large-12 columns text-center">
				<img src="img/footer-logo.png"  class="" id="footer-logo"  alt="" />
				<div id="copy">© 2015 Executive Business Alliance.</div><!-- end div#copy -->
		    </div><!-- end columns -->
		</div><!-- end row -->
		
	</section><!-- end section #footer.tan -->

		<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.js" type="text/javascript"></script> 
	<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js" type="text/javascript"><\/script>')</script>
	
	<script src="js/foundation.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
