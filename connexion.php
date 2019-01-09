<?php


require_once 'config.php';

     try {

         $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $requete = $bdd->prepare('SELECT id FROM Utilisateur WHERE username= ? AND password= ?');

         if($requete->execute(array($_POST['username'],$_POST['password']))){
           $resultat=$requete->fetch();
         }

         if($resultat[0]){
          header('Location: http://localhost/ToDoListProject/home.php');
         }
         else{
           echo 'si mdp ou login mauvais';
         }




        }
        catch (PDOException $e) {
            print "Erreur : " . $e->getMessage() . "<br/>";
            die();
        }





 ?>
