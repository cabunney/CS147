<!DOCTYPE html> 
<html>

<head>
	<title>Disgo | Add New</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="blue">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="white_theme.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">

	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
</head> 

	<body>
	
		
		
		<?php
		
			include("config.php");
			
			
			

			// Take in parameters
			$title = $_POST["name"];

			echo "Title:" . $title . "<br />"
			
			if ($_FILES["file"]["error"] > 0)
			  {
			  	echo "Error: " . $_FILES["file"]["error"] . "<br />";
			  }
			else
			  {
				  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
				  echo "Type: " . $_FILES["file"]["type"] . "<br />";
				  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				  echo "Stored in: " . $_FILES["file"]["tmp_name"];
			  }
			
			// $query = "INSERT INTO orders (name, email, time, book) VALUES ('$name', '$email', '$t', '$book')";
			
			
			// $result = mysql_query($query);
			
			// if ($result) {
			// 	// What do the following lines do? Answer -> #1
			// 	$query2 = "SELECT * from books where asin = '".$book."'";
			// 	$result2 = mysql_query($query2);
			// 	$row2 = mysql_fetch_assoc($result2);
			// 	sendmail($email, $name, $row2["title"]);
			// 	echo "<p>Thank you for ordering a book. Please check your email for further instructions.</p>";
					
			// }
			
			
			?>
		
		<script type="text/javascript">
	
		</script>
	</body>
</html>