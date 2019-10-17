<!DOCTYPE html>
<html>
	<head>
	<title>Events | Good Results Ministries</title>
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
		
		<section id="eventsIntro" class="w3-container">
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
					
		<section id="events" class="w3-container w3-margin-top w3-margin-bottom">
			<div class="w3-row">				
				<div class="w3-col m12">
					<div class="w3-margin w3-padding-large">
						<h1> UPCOMING EVENTS
						</h1>					
					</div>
				</div>
			</div>
			
			<div class="w3-row">
				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center">
						<p></p>					
					</div>
				</div>
				<div class="w3-col m10 l8 w3-center">
					<div class="w3-center">					
						<h3>WE HAVE EXCITING EVENTS SCHEDULED:
						</h3>
						
						<h5>
							<ul>
								<li>* Creating a Garden That Thrives </li>
								
								<li>* Discovering Your Strengths </li>
							</ul>
						</h5>				
							
						
						<h3> Call/email us for additional information!							
						</h3>							
					</div>
				</div>

				<div class="w3-col m1 l2 w3-center">
					<div class="w3-center">
						<p></p>					
					</div>
				</div>					
			</div>	
		
			<div class="w3-row">
				<div class="w3-col m1 l3 w3-center w3-margin-top w3-margin-bottom">
				</div>
				<div class="w3-col m5 l3 w3-center w3-margin-top w3-margin-bottom">					
					<div class="w3-center w3-margin w3-card-4">
						<div class="w3-row image">
							<img src="images/flower_bee_freeImage_pexelsWebsite.jpeg" id="gardening" />
						</div>
						<div class="w3-row text">				
							<h5 class="w3-margin-left w3-margin-right">
								<span>July 28</span>
								<br/>
								<span>9:00AM - 12:00PM</span>
								<br/>						
							</h5>
							<p class="w3-margin-left w3-margin-right">
								Creating a Garden That Thrives
							</p>
						</div>
					</div>					
				</div>	
				<div class="w3-col m5 l3 w3-center w3-margin-top w3-margin-bottom">					
					<div class="w3-center w3-margin w3-card-4">						
						<div class="w3-row text">
							<h5 class="w3-margin-left w3-margin-right">
								<span>August 25</span>
								<br/>
								<span>9:00AM - 12:00PM</span>
								<br/>						
							</h5>
							<p class="w3-margin-left w3-margin-right">
								Discovering Your Strengths
							</p>
						</div>
						<div class="w3-row image">	
							<img src="images/magnifyingGlass.svg" id="discovering" />
						</div>
					</div>					
				</div>
				<div class="w3-col m1 l3 w3-center w3-margin-top w3-margin-bottom">
				</div>				
			</div>		
		</section>
		
		<section id="eventsAddlText" class="w3-container w3-margin-top w3-margin-bottom w3-card-4">			
		
			<div class="w3-row">
				<div class="w3-center w3-margin-top w3-margin-bottom">					
					<h3> Vist our website often for updated event information!
					</h3>
				</div>
			</div>
			
		
		</section>
		
		<section id="eventRegistration" class="w3-container w3-margin-top w3-margin-bottom">

			<div class="w3-row">
				<div class="w3-center w3-margin-top w3-margin-bottom">
					<h3> Ready to register for an event?!
					</h3>
					<h5>Complete the event registration form below.
					</h5>
				</div>
			</div>	
			
			<div class="w3-row">
				<div class="w3-col m1 l2 w3-center w3-margin-top w3-margin-bottom">
				</div>
				
				<div class="w3-col m10 l8 w3-margin-top w3-margin-bottom">
					<div class="w3-padding eventRegistrationForm w3-card-4">
						<form id="eventRegistrationForm" action="eventRegistration.php" method="post" class="w3-display-container">
							<h3 class="w3-margin-top">Event Registration:							
							</h3>
							<p class="w3-margin-bottom">Advance registration appreciated!
							</p>
							<br />
							<br />
							
							<label for="firstName">First Name:</label>
							<input id="firstName" class="w3-input" name="firstName" type="text"/>
							<br />
							<label for="lastName">Last Name:</label>
							<input id="lastName" class="w3-input" name="lastName" type="text" />
							<br />
							<br />
							<h5>Select an event:
							</h5>
							<p>
								<input id="creating-a-garden-that-thrives" class="w3-check" name="events[]" value="creating-a-garden-that-thrives" type="checkbox" />
								<label for="creating-a-garden-that-thrives">Creating a Garden That Thrives</label>
							</p>
							<p>
								<input id="discovering-your-strengths" class="w3-check" name="events[]" value ="discovering-your-strengths" type="checkbox" />
								<label for="discovering-your-strengths">Discovering Your Strengths</label>
							</p>
							<br />
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
