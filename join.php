<!DOCTYPE html>
<html>
	<head>
	<title>Join Us | Good Results Ministries</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	<meta name="description" content="Good Results Ministries is a Bible-believing outreach ministry in Easton, PA, focusing on helping neighbors and strengthening communities. We offer workshops to members of the community to identify and develop their skills in carpentry, masonry, computer technology, gardening, and cooking. We also work with area vendors to collect and distribute foods to the needy." />
	<meta name="keywords" content="ministry, outreach, workshop, volunteer" />
	
	<!-- including this script provided by Google to ensure HTML5 elements appear as they should in all Internet Explorer versions-->
	<!--[if lt IE 9]>
		<script src=”http://html5shiv.googlecode.com/svn/trunk/html5.js”> </script>
	<![endif]-->
	
	
	<link href="https://fonts.googleapis.com/css?family=Oxygen" type="text/css" rel="stylesheet" />
	<link href="css/w3.css" type="text/css" rel="stylesheet" />
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	
	
	
	</head>
	
	<body>
	
		<?php include("header.html"); ?>
		
		<section id="joinIntro" class="w3-container">
			<div class="w3-row">
				<div class="w3-col m2">
					<p>	
					</p>				
				</div>
				<div class="w3-col m8 w3-center">
	
				</div>
				<div class="w3-col m2">
					<p>	
					</p>				
				</div>
			</div>	
		
		</section>
		
		<section id="join" class="w3-container w3-margin-top w3-margin-bottom">
		
			<div class="w3-row">				
				<div class="w3-col m12">
					<div class="w3-margin w3-padding-large">
						<h1> JOIN US  </h1>					
					</div>
				</div>
			</div>
			
			<div class="w3-row">
				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center w3-padding">
						<p></p>					
					</div>
				</div>
				<div class="w3-col m10 l8 w3-center">
					<div class="w3-center w3-padding">					
						<h3>WE ARE ALWAYS LOOKING FOR VOLUNTEERS!
						</h3>
						
						<p> If you are ready to join us, or if you simply want additional information about volunteering, complete the Volunteer Registration form below.							
						</p>
						
						<p> Your questions and comments are welcome!
						</p>
								
					</div>
				</div>

				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center w3-padding">
						<p></p>					
					</div>
				</div>					
			</div>
		</section>
		
		<section id="joinAddlText" class="w3-container w3-margin-top w3-margin-bottom">
			
			<div class="w3-row">
				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center w3-padding">
						<p></p>					
					</div>
				</div>
				<div class="w3-col m10 l8 w3-center">
					<div class="w3-center w3-margin-top w3-margin-bottom">					
						<h3>Thank you for your help!
						</h3>								
					</div>
				</div>
				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center w3-padding">
						<p></p>					
					</div>
				</div>					
			</div>
		
		</section>
		
				
		<section id="volunteerRegistration" class="w3-container w3-margin-top w3-margin-bottom">
			<div class="w3-row">
				<div class="w3-col m1 l2 w3-center w3-margin-top w3-margin-bottom">
				</div>
				
				<div class="w3-col m10 l8 w3-margin-top w3-margin-bottom">
					<div class="w3-padding volunteerRegistrationForm w3-card-4">
						<form id="volunteerRegistrationForm" action="volunteerRegistration.php" method="post" class="w3-display-container">
							<h3 class="w3-margin-top">Volunteer Registration:							
							</h3>
							
							<br />
							<br />
							
							<label for="firstName">First Name:</label>
							<input id="firstName" class="w3-input" name="firstName" type="text"/>
							<br />
							<label for="lastName">Last Name:</label>
							<input id="lastName" class="w3-input" name="lastName" type="text" />
							<br />
							<label for="age">Age:</label>
							<input id="age" class="w3-input" name="age" type="number" />
							<br />
							<label for="email">Email:</label>
							<input id="email" class="w3-input" name="email" type="email" />
							<br />
							<label for="phone">Phone Number:</label>
							<input id="phone" class="w3-input" name="phone" type="text" placeholder="xxx-xxx-xxxx"/>
							<br />
							<br />						
							
							<h5>What are your areas of strength?
							</h5>
							<p>
								<input id="carpentry" class="w3-check" name="strengths[]" value="carpentry" type="checkbox" />
								<label for="carpentry">Carpentry</label>
							</p>								
							<p>
								<input id="masonry" class="w3-check" name="strengths[]" value="masonry" type="checkbox" />
								<label for="masonry">Masonry</label>
							</p>
							<p>	
								<input id="gardening" class="w3-check" name="strengths[]" value="gardening" type="checkbox" />
								<label for="gardening">Gardening</label>
							</p>								
							<p>	
								<input id="cooking" class="w3-check" name="strengths[]" value="cooking" type="checkbox" />
								<label for="cooking">Cooking</label>
							</p>								
							<p>	
								<input id="computerTechnology" class="w3-check" name="strengths[]" value="computerTechnology" type="checkbox" />
								<label for="computerTechnology">Computer Tech</label>
							</p>								
							<p>	
								<input id="other" class="w3-check" name="strengths[]" value="other" type="checkbox" />
								<label for="other">Other</label>								
							</p>
							<br />
							<br />
							
							<h5>Comments:
							</h5>
							<p>
								<input id="comments" class="w3-input" name="comments" type="text"  />															
							</p>
							<br />
							<br />

							<h5>Questions:
							</h5>
							<p>
								<input id="questions" class="w3-input" name="questions" type="text" />	
							</p>
							<br />	
							<br />
							<br />
							<input id="submit" class="w3-btn w3-round w3-display-bottomright" name="submit" value="SUBMIT" type="submit" />
						</form>
					</div>
				</div>
				
				<div class="w3-col m1 l2 w3-center w3-margin-top w3-margin-bottom">
				</div>
			</div>	
		
		</section>
		
		<?php include("footer.html"); ?>
		
	</body>
	
	<script src="js/script.js" type="text/javascript"></script>
	
</html>