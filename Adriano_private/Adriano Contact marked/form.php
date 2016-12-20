<!DOCTYPE html>
<html lang="en">
<head><!--you lost marks on details: didn't include a screen grab of your code validation, 
	your results is not exactly as assigned-->
	<meta charset="utf-8">
	<title>Contact us!</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="h1"><!--you don't need to create a class called h1, you can just style the element-->
<h1>
	Contact us!
</h1>
</div>
<div class="link">
	<a href="https://www.google.ca/search?q=home&safe=off&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjzyseVzbLPAhVGdz4KHXvrBLQQ_AUICCgB&biw=1920&bih=942" target="_blank">Home</a>
</div>
<br><br>
<p>
	We're always open to critique and suggestions! Feel free to tell us how to improve our services.<br> Make sure to fill in your contact information bellow. Our team of trained professionals<br> will answer as soon as possible.
	</p>
<div class="form">
<form action="results.php">
	First name
	<input type="text" name="firstname" required>
	<br><br>
	Last name
	<input type="text" name="lastname" required>
	<br><br>
	E-mail
	<input type="email" name="email" required>
	<br><br>
	Telephone number 
	<input type="number" name="telphone">
	<br><br>
	What's on your mind?
	<br>
	<textarea name="message" rows="5" cols="50"></textarea>
	<br>
	<input type="submit" name="submit">
</form>
</div>
</body>
</html>