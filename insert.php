<?php

try{

    require 'connecte.php';

    if(isset($_POST['btn'])){
            
            $nom=$_POST['nom'];
            $age=$_POST['age'];
        
            $sql=('INSERT INTO etudiant (nom,age) VALUES (:nom,:age) ');
            $req=$bdd->prepare($sql);
            $req->execute([':nom'=>$nom,':age'=>$age]);
            
        }

        else{
            echo "ERROR DATA 404";
        }
    }


    catch(Exception $e){
        die('Error !! '.$e->getMessage());
    }

header("Refresh:0; url=display.php");
?>