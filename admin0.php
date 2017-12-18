<?php
session_start();
extract($_POST);
if(!$_SESSION['admin']){
    header('location:connexion0.php');
}else{
	echo "<h1>Bienvenue admin</h1>";
echo '<a href="tableau0.php">tableau</a>';
echo '<a href="heure0.php">Heure</a>';
echo '<form method="post" action="admin0.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
extract($_POST);
if(isset($dec)){
    session_destroy();
    header('location: connexion0.php');
   }
}
?>