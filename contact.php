<!doctype html>
<html>
	<head>
		<title>Index</title>
			<Meta name="description" content="my page"/>
			<Meta charset="utf-8"/>
			<link rel="stylesheet" href="main.css" type="text/css" />
			<?php include 'config.php';?>
	</head>
	<body>
	<?php include 'menu.php';?>
	<h4>Contact</h4>
  <form class="contact">

    <label for="fname">Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">E-mail:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your e-mail..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" class="contactbtn">

  </form>
	<?php include 'footer.php';?>
	</body>
</html>