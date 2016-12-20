<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="stylesheet.css">
	<meta charset="utf-8">
	<title>Contact us!</title>
</head>
<body>
<div class="h1">
<h1>
	Contact us!
</h1>
</div>
<div class="link">
	<a href="https://www.google.ca/search?q=home&safe=off&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjzyseVzbLPAhVGdz4KHXvrBLQQ_AUICCgB&biw=1920&bih=942" target="_blank">Home</a>
</div><!--Adriano not sure why you are linking to a google image search here.  Put your images in a folder called images and link to them in your html -->
<p class="answer">
	Thank you, <?php echo $_GET["firstname"] , " " , $_GET["lastname"];?>!
	<br><br>
	Our clients' satisfaction is always our greatest concern. We will be contacting you as soon as possible <br>through this email: <?php echo $_GET["email"];?>
</p>
</body>
</html>