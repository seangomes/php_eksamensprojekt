<?php
/* Funktionen finder ud af om den valgte bruger oenskeliste,
 * findes paa serveren.
 */
function doesUserExist($username)
{
	return file_exists("../userxmls/$username.xml");
}

/* Tjekker om den valgte oenskeliste findes */
if (strcmp($_GET["username"], ""))
{
	$username = urlencode($_GET["username"]);
	
	if (doesUserExist($username))
		echo($username);
		
	else
		echo($username);
}

else
	echo("Frontpage");

?>