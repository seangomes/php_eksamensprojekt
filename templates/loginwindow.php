<h1 class="hiddenheader">Login Section</h1>
<form id="loginwindow" method="post" action="<?php $_SERVER["PHP_SELF"]?>">
	<input class="logininputs" type="email" name="emailfield" placeholder="Email">
	<input class="logininputs" type="password" name="passwordfield" placeholder="Adgangskode">
	<input type="checkbox" name="stayloggedin">Forbliv logged ind<br>
	<input class="submitbutton" type="submit" name="login" value="Log ind"><br>
	<a href="#">Glemt din adgangskode?</a><br>
</form>