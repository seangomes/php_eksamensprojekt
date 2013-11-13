<?php 
/* Create a user */
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Opret bruger</title>
<link rel="stylesheet" href="styles/main.css" media="screen, projection">
<script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="scripts/showloginwindow.js"></script>
</head>

<body>
	<h1 class="hiddenheader">php_eksamenprojekt</h1>
	<article id="createuser">
		<h1 class="hiddenheader">Opret Bruger</h1>
		<header id="userdescr">
			<h2>Opret Bruger</h2>
			<p>Med en gratis bruger kan du oprette din ønskeliste online og dele den med din familie og venner.</p>
			<p>
				Dine brugerinformationer skal dække følgende krav:
				<ul>
					<li>Dit brugernavn skal være din email.</li>
					<li>Din adgangskode skal bestå af mindst et tal og bogstav, og være længere end 5 karaktere.</li>
					<li>Dit navn vil kun blive vist i din ønskeliste.</li>
					<li>Alle felter skal udfyldes.</li>
				</ul>
			</p>
		</header>
		<section id="userinputs">
			<h1 class="hiddenheader">Indtast brugerinformationer</h1>
			<form method="post" accept="<?php $_SERVER["PHP_SELF"];?>">
				<input class="userinput" type="email" name="usernamefield" placeholder="Email" autofocus="">
				<input class="userinput" type="text" name="namefield" placeholder="Navn">
				<input class="userinput" type="password" name="passwordfield" placeholder="Adgangskode">
				<input class="userinput" type="password" name="passwordfield" placeholder="Gentag adgangskode">
				<input class="submitbutton" type="submit" name="createuser" value="Opret Bruger">
			</form>
			<a  href="list.php">Gå tilbage</a>
		</section>
	</article>
</body>
</html>
