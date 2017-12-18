<?php
     session_start();
     extract(($_POST));
     if(isset($valide)){
         if($perso=="admin" AND $pass=="admin"){
       	$_SESSION['admin']="admin";

        header('location: admin0.php');
    }
    else if($perso=="user" AND $pass=="user"){
    	$_SESSION['user']="user";
        header('location: user0.php');
    }
    else{
    	echo "veuillez saisir les champs correctements";
    }
}
 ?> 