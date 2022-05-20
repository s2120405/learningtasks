<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kirby - Portfolio</title>
	<link rel="stylesheet" href="css/stylesheets.css">
</head>

<body>
		<ul>
		<li><a onmouseenter='play()' href="index.php">Home</a> </li>
		<li><a  onmouseenter='play()' href="index.php?page=DesignerProfile">Designer's Profile</a> </li>
		<li><a  onmouseenter='play()' href="index.php?page=SampleWorks">Sample Works</a> </li>
		</ul>
	
	<?php
		switch($page){
			case "DesignerProfile":
			include "DesignProfile.php";
		break;
			case "SampleWorks":
			include "SampleWorks.php";
		break;
			default:
			include "Home.php";
		break;}
?>			
		
	<script src="jvs/script.js"></script>
</body>
</html>