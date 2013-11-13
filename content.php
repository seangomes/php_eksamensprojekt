<?php 
session_start();

/* Brugeren forsoeger at logge ind. */
if (isset($_POST["login"]))
{
	$_SESSION["isLoggedIn"] = strtolower($_POST["emailfield"]);
	
	// Automatisk saettes den viste liste til brugerens.
	header("Location: content.php?user=".urlencode($_SESSION["isLoggedIn"]));
}

/* Brugeren logger ud. */
if (isset($_POST["logout"]))
{
	unset($_SESSION["isLoggedIn"]);
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ønskelisten</title>
<link rel="stylesheet" href="styles/main.css" media="screen, projection">
<script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="scripts/showloginwindow.js"></script> 	<!-- Script til visning af loginvindue. -->
<script type="text/javascript" src="scripts/getlist.js"></script> 			<!-- Script til at hente oenskeliste. -->
</head>


<!-- For at en oenskeliste skal kunne laeses ind, skal der i URL-adressen,
indgaa brugerens email uden alt efter @-tegnet. For eksempel kan det være:
http://localhost/php_projekt/content.php?user=adamduehan -->

<body onload="getList('<?php echo($_GET["user"]);?>')">
	<h1 class="hiddenheader">php_eksamenprojekt</h1>
	<?php include("templates/topheader.php");?>
	
	<!-- Indtastningsdelen skal kun vises, hvis man er paa sin egen oenskeliste. --> 
	<?php if (strcmp(urldecode($_GET["user"]), $_SESSION["isLoggedIn"]) == 0)
	{?>
		<article id="enterwish">
			Enter some wishes.
		</article>
	<?php 
	}
	?>
	<article id="list">
	</section>
</body>
</html>