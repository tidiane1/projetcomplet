<!DOCTYPE html>
<html>
<head>
	<title>Connextion</title>
	<meta charset="utf-8">
</head>
<body>
	
	<center>
		<h1>BIENVENU A VOTRE SITE</h1>
		<a href="ajouter0.php">S'INSCRIRE</a>
		<form method="POST" action="connexion0.php">
		<input type="text" name="login" placeholder="Entrer votre login"><br><br>
		<input type="password" name="password" placeholder="Votre mot de passe"><br><br>
		<select name="profil">
			<option value="">Profil</option>
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select>
		<input type="submit" name="submit" value="Connexion">
	</form>
	<br>
	
	
	<?php
		include('generer0.php');
		extract($_POST);
		if(isset($submit)){
			connexion($login, $password, $profil);	
		}
	?>

</center>
</body>
</html>