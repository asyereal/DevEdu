<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" dir="ltr">
		<meta name="author" content="Arif & Asyraf">
		<meta name="title" content="RealEdu">
		<meta name="description" content="RealEdu is a website to unify education">
		<meta name="viewport" content="width=device-width initial-scale=1.0">
		<title>RealEdu</title>
		<link rel="stylesheet" href="./resources/stylesheet.css">
		<link rel="shortcut icon" href="./resources/favicon.png">
	</head>
	<body onload="console.log(localStorage.getItem('openmenu')); testopen()">
		<script src="js/script.js"></script>
		<header>
			<div class="more">
				<button id="frontboard" onclick="location.reload();" type="button"> RealEdu </button>
				<button id="inilink" onclick="localStorage.setItem('openmenu', 0); location.reload();" type="button" style="font-family: Balsamiq Sans;display:none;"> < </button>
			</div>
		</header>
		<form action="catalogue.php" method="POST" class="SECTION_TEXTBOOKS">
		<input type="hidden" name="level" value="" id="text_parser">
		<input type="hidden" name="school" value="" id="level_parser">
			<div class="textbooks">
				<h1 id="descbar">
					E-textbooks catalogue
				</h1>
				<div class="dropdown">
					<button type="button" class="articles">☰</button>
					<div class="droptions">
						<button type="button" class="articles" onclick="purpl()" style="font-size: 150%;">Purpl</button>
						<button type="button" class="articles" onclick="goldy()" style="font-size: 150%;">Goldy</button>
						<button type="button" class="articles" onclick="mynt()" style="font-size: 150%;">Mynt</button>
						<button type="button" class="articles" onclick="pynk()" style="font-size: 150%;">Pynk</button>
					</div>
				</div>
			</div>
			<div id="eduprompt">
				<button type="button" class="tab" onclick="opentab('menu1');parse_level('Primary');">
					<div class="card">
						<div class="topic">
							Primary School
						</div>
					</div>
				</button>
				<button type="button" class="tab" onclick="opentab('menu2');parse_level('Secondary');">
					<div class="card">
						<div class="topic">
							Secondary School
						</div>
					</div>
				</button>
			</div>
			<div id="menu1" class="maintabs" style="display:none">
				<ul>
					<li><button id="mlink" class="psli" type="submit" value=1 name="grade">Year 1</button></li>
					<li><button id="mlink" class="psli" type="submit" value=2 name="grade">Year 2</button></li>
					<li><button id="mlink" class="psli" type="submit" value=3 name="grade">Year 3</button></li>
					<li><button id="mlink" class="psli" type="submit" value=4 name="grade">Year 4</button></li>
					<li><button id="mlink" class="psli" type="submit" value=5 name="grade">Year 5</button></li>
					<li><button id="mlink" class="psli" type="submit" value=6 name="grade">Year 6</button></li>
<!--
					<li><a id="mlink" href="./ps/year1.html" class="psli"> Year 1 </a></li>
					<li><a id="mlink" href="./ps/year2.html" class="psli"> Year 2 </a></li>
					<li><a id="mlink" href="./ps/year3.html" class="psli"> Year 3 </a></li>
					<li><a id="mlink" href="./ps/year4.html" class="psli"> Year 4 </a></li>
					<li><a id="mlink" href="./ps/year5.html" class="psli"> Year 5 </a></li>
					<li><a id="mlink" href="./ps/year6.html" class="psli"> Year 6 </a></li>
-->
				</ul>
			</div>
			<div id="menu2" class="maintabs" style="display:none">
				<ul>
					<li><button id="mlink" class="ssli" type="submit" value=1 name="grade">Form 1</button></li>
					<li><button id="mlink" class="ssli" type="submit" value=2 name="grade">Form 2</button></li>
					<li><button id="mlink" class="ssli" type="submit" value=3 name="grade">Form 3</button></li>
					<li><button id="mlink" class="ssli" type="submit" value=4 name="grade">Form 4</button></li>
					<li><button id="mlink" class="ssli" type="submit" value=5 name="grade">Form 5</button></li>
<!--
					<li><a id="mlink" href="./ss/form1.php" class="ssli"> Form 1 </a></li>
					<li><a id="mlink" href="./ss/form2.php" class="ssli"> Form 2 </a></li>
					<li><a id="mlink" href="./ss/form3.php" class="ssli"> Form 3 </a></li>
					<li><a id="mlink" href="./ss/form4.html" class="ssli"> Form 4 </a></li>
					<li><a id="mlink" href="./ss/form5.html" class="ssli"> Form 5 </a></li>
					<li><a id="mlink" href="./ss/additional.html" class="ssli"> Additional Streams </a></li>
-->
				</ul>
			</div>
		</form>
		<footer>
			Copyright 2023 by PioneersMTNP. All Rights Reserved.
			<br>
			<button class="supp" onclick="window.open('https://bmc.link/asyereal')"> Support this project! </a>
		</footer>
	</body>
</html>
