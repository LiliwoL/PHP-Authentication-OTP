<?php
    date_default_timezone_set('Europe/Paris');
?>
	
<form method="POST">
		Login: <input type="text" name="login"><br>
		Mot de passe: <input type="password" name="password"><br>		
		<input type="submit" value="Login"><br>
</form>
<hr>
 
			
<?php
	
/***********************
 * Fonction de vérification du formulaire
 ***********************/
// Fonction qui renvoie true si login et mot de passe sont corrects
function checkLoginPassword($login, $password)
{
    if ($login=='toto' && $password=='titi') return true;
    return false;
}
 
$formOutput = '';
// Traitement du formulaire de login:
if (!empty($_POST['login']))
{
    if ( checkLoginPassword($_POST['login'], $_POST['password'] ))
        $formOutput = "👍👍👍 Login OK !";
    else
        $formOutput = "💀💀💀 Echec login";
}

echo $formOutput;