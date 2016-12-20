<!DOCTYPE html>
<!--IMMT 715 Assignment #2: Contact Page. by Katie Lawson -->

<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact Page</title>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles.css">
<!--great work!  I would actually suggest with a long form like this and the varied information gathering that the message would be best delivered on a new page.
	when the page reloads, I would not necessarily think to scroll down to see the message OR deliver it at the top of the page.  it
wasn't part of the assignment but think about applying string functions to correct for capitals
on the person's name!-->
	</head>
	<body>
		<!--<section> what if i took out the section tag -->
			<div class="header">
				
				<h1><a id ="logo" href="#">Katie Lawson</a></h1> <!--link to homepage once built-->
				
				<p id="blog"><a href="http://heartdigital.blogspot.ca" target="_blank">p(art) digital</a></p>
			
			<hr class="top">
			</div>
		<!--</section>-->
		
		<section>
			<div class="content">
				<div class="work">
					<h2><span>Want to work with me?</span></h2>
					<p>Here are some ways I might be able to help:</p>
					<ul>
						<li>Web development</li> 
						<li>Content development and strategy</li>
						<li>Creative brainstorming/coaching</li> 
						<li>Acting coach: classical monologues, audition prep</li> 
						<li>Proofreading, editing</li> 
						<li>Social media management</li>		
					</ul> 
				</div>
				<div class="photo">
					<img src="flowers_computer.jpeg" style="width: 100%;" alt="Photo of yellow and red tulips with a laptop out of focus in the background."/> 
				</div> 
			</div>
			<div class="details">
				<h3><span>Get in touch</span></h3>
				
				<p>Send me your details and let me know what you'd like to collaborate on.
				<br>
				<br>
				Fill in the form below and I'll be in touch shortly. 
				</p>
				<!--form must contain first name, last name, password, phone number, general info typed into text field, one other piece of info-->
				<form id="contact_form" method="POST">
					<fieldset>
					<legend>Name and Age</legend>
						<ul>
							<li>
								<label>First Name: </label>
								<input type="text" name="first_name"><br>
								<label>Last Name: </label>
								<input type="text" name="last_name"><br>
								<label>Age: </label>
								<input type="number" min="18" max="120" name="age">
							</li>
						</ul>
					</fieldset>
					<fieldset>
					<legend>Contact and Password</legend>
						<ul>
							<li>
								<label>Email: </label>
								<input type="Email" name="Email"><br>
								<label>Phone Number: </label>
								<input type="tel" name="Phone" value="(xxx)xxx-xxxx"><br>
								<label>Password: </label>
								<input type="password" name="password" value="enter password">
							</li>
						</ul>
					</fieldset>
					<fieldset>
					<legend>Location etc.</legend>
						<ul>
							<li>
								<label>Where do you live? </label>
								<input type="text" name="City" value="City"><br>
								<input type="radio" name="beverage" value="coffee">
								<label> coffee </label>
								<input type="radio" name="beverage" value="tea">
								<label> or tea?</label>
							</li>
						</ul>
					</fieldset>
					<fieldset>
					<legend>Talk to me</legend>
						<ul>
							<li>
								<label>Comments: </label>
								<textarea name="Comments" cols="50" rows="10"></textarea>
							</li>
						</ul>
					</fieldset>
							<input type="submit" name="submit" value="Submit form">
							<input type="reset" name="reset" value="clear">
							<br>
							<br>
				</form>

						<?php   
							
							

							if(isset($_POST['submit'])) {

							$firstName = $_POST['first_name'];
							$lastName = $_POST['last_name'];
							$email = $_POST['Email'];
							$city = $_POST['City'];
							$beverage = $_POST['beverage'];
					       		echo "<div id='contactmsg'> Thank you $firstName $lastName for sending your details my way.  I will contact you at $email the next time I am in $city and maybe we  can meet up for a $beverage!</div>";}
						?> 
			</div>
			
			<hr class="bottom">	
		</section>
	</body>
</html>