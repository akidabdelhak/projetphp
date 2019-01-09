<?php

if($_POST['password']==$_POST['passwordConf']){


require_once 'config.php';

     try {

         $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

         $requete = $bdd->prepare('INSERT INTO Utilisateur (username, password) VALUES (:username, :password)');



         //Requête SQL
         $requete->execute(array('username' => $_POST['username'],
                             'password' => $_POST['password']

       ));


       echo"<script language=\"javascript\">alert('vous êtes maintenant inscrit, veuilez vous connecter');document.location.href= 'http://localhost/ToDoListProject/accueil.html';</script>";



       }


     catch (PDOException $e) {
         print "Erreur : " . $e->getMessage() . "<br/>";
         die();
     }
}
else{
  echo "les mots de passe ne sont pas identiques, veuillez resaisir";
}



 ?>
