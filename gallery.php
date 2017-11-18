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

	<h4>Gallery</h4>
	<br>
	<div id="bookgallery">
		<?php

		//https://stackoverflow.com/questions/11903289/pull-all-images-from-a-specified-directory-and-then-display-them 
		// The code used to display the images

			$files = glob("uploadedfiles/*.*");

			for ($i=0; $i<count($files); $i++) {
			    $image = $files[$i];
			   
			    echo '<img src="'.$image .'" alt="Random image" class="bookimg" />';
			}

		?>	
	</div>


	<br><a href="SQLInjection.php" class="resbtn">UPLOAD PICTURES</a>
	
	<?php include 'footer.php';?>
	</body>
</html>