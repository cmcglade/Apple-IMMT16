<!DOCTYPE html>  
<html>  

	<!-- Kerri-Dale Smith's Assigment -->
	
<head>  
	<title> Get in touch </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>  
<!--great work!  nice styling.  for a challenge try to correct the names in the message so the first and last name
	are caoitalised using string functions-->
<body>

	<div class="heading">
		<h1>Drop me a line </h1>
		<hr><br>
		<h2>& I'll get back to you as soon as <span>humanly</span> possible!</h2>
	</div>

	<div class="form">
		<form method='POST'>
			<label>First Name</label><input type="text" name="first_name" placeholder="First Name"><br> 
			<label>Last Name</label><input type="text" name="last_name" placeholder="Last Name"><br>
			<label>Email Address</label><input type="email" name="email_address" placeholder="Email Address"><br><label>Phone Number</label><input type="number" name="Phone_number" placeholder="Phone Number"><br>
			<label>Password</label><input type="password" name="password" placeholder="Password"><br>
			<label>Leave a Message</label><textarea name="Longer_Text" placeholder="Leave message here..."></textarea><br><br>
			<input type="submit" name="submit" value="Submit">
		</form> 
	</div>
	
	<?php   
		$vara = $_POST['first_name'];
		$varb = $_POST['last_name'];
		$varc = $_POST['email_address'];

		if (!empty($_POST['first_name']))
		{
       	echo "<h3> Thanks $vara $varb for getting in touch. I will contact you shortly at $varc. </h3>";}
	?>
	
	<hr>

	<div class="end">
		<p> While you wait, take a look at: </p>
	
		<ul>
			<li> <a href="http://www.behance.net/kerridalesmith" target="_blank"> My Work </a> </li>
			<li> <a href="https://ca.linkedin.com/in/kerridalesmith" target="_blank"> My Resume </a> </li>
			<li> <a href="https://www.instagram.com/kdeidra_/" target="_blank"> My Pictures </a> </li>
		</ul>
	
	</div>		
		
</body>  
</html> 
