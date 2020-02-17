<!DOCTYPE HTML>
<html>
<head>
	<title>Banc Digital Test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/style.css" type="text/css">
<body>
<h2>Your details</h2>
<p>Below is conformation of the details you entered into the form</p>
Name: <?php echo $_POST["name"]; ?><br>
How did you hear about us? <?php echo $_POST["select1"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your telephone number: <?php echo $_POST["telephone"]; ?><br>
Comments: <?php echo $_POST["comments"]; ?>
<br>
<br>
<button onclick="goBack()">Go Back to contact form</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
