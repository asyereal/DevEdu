<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=UTF-8" dir="ltr">
		<meta name="author" content="Arif & Asyraf">
		<meta name="title" content="RealEdu">
		<meta name="description" content="RealEdu is a website to unify education">
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<title>RealEdu</title>
		<link rel="stylesheet" href="../resources/stylesheet.css">
		<link rel="shortcut icon" href="../resources/favicon.png">
	</head>
	<body>
		<script src="../js/script.js"></script>
		<header>
			<div class="more">
				<button id="inilink" onclick="localStorage.setItem('openmenu', 2); history.back()" type="button" style="font-family: Balsamiq Sans;"> < </button>
			</div>
		</header>
<?php
$school_lvl = strcmp($_POST["level"], "Primary") ? "Form" : "Year";
?>
		<div id="eduprompt">
			<div class="textbooks">
			<h1 id="descbar"><?php echo $_POST["level"] ?> School | <?php echo $school_lvl." ".$_POST["grade"]; ?></h1>
				<div class="dropdown">
					<button type="button" class="articles">☰</button>
					<div class="droptions">
						<button type="button" class="articles" onclick="blue()" style="font-size: 150%;">Blue</button>
						<button type="button" class="articles" onclick="gold()" style="font-size: 150%;">Gold</button>
						<button type="button" class="articles" onclick="mint()" style="font-size: 150%;">Mint</button>
						<button type="button" class="articles" onclick="pink()" style="font-size: 150%;">Pink</button>
					</div>
				</div>
			</div>
		</div>
		<ul class="essay">
<?php
$user = "realedu";
$pass = "realedu";
$db = "realedu";
$machine = "localhost";
$FileNamePrefix = "\"/EBOOKS/";

$myquery = "SELECT * FROM ". $_POST["school"] . " WHERE Year = " . $_POST["grade"];
$mydb = new mysqli("$machine", "$user", "$pass", "$db");
if($mydb -> connect_errno){
	echo "Failed to connect to database: " . $mydb -> connect_error;
	exit();
}

$result = $mydb -> query($myquery);
if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		printf("<li><button id='mlink' onclick='window.open(%s)'>%s</button></li>", ($FileNamePrefix.$row["FileName"]."\""), $row["Title"]);
	}
}else{
	echo "No books :(";
}
$result -> free_result();
$mydb -> close();
?>
		</ul>
		<footer>
			Copyright 2023 by PioneersMTNP. All Rights Reserved.
		</footer>
	</body>
</html>
