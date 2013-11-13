<header id="topheader" class="clearfix">
	<nav id="topnavigation">
		<h1 class="hiddenheader">Top Navigation</h1>
		<ul>
			<li><span id="logo">Ønskelisten</span></li>
			<li><input type="search" placeholder="Søg efter ønskeliste..." autofocus=""></li>
			<li><input type="button" value="Søg">
		</ul>
		<section id="usersection">
			<h1 class="hiddenheader">User Section</h1>
			<?php if (!isset($_SESSION["isLoggedIn"]))
			{?>
				<a class="topnavigationlink" href="createuser.php">Opret Bruger</a>
				<input class="userbutton" type="button" onclick="showLoginWindow()" value="Log ind">
			<?php
			}
			
			else if (isset($_SESSION["isLoggedIn"]))
			{?>
				<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
					Du er logget ind som: <?php echo($_SESSION["isLoggedIn"]);?>
					<input class="userbutton" type="submit" name="logout" value="Log Ud">
				</form>
			<?php 
			}?>
			<!-- Her bliver et loginvindue/loginsettings vist -->
			<article id="popup">
				<h1 class="hiddenheader">Login Section</h1>
			</article>
		</section>
	</nav>
</header>