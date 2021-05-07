<?php

require "connecte.php";

if(isset($_POST['updatebtn'])){
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $age=$_POST['age'];

    $sql='UPDATE etudiant SET nom = :nom , age = :age WHERE id = :id';
    $req=$bdd->prepare($sql);
    if($req->execute([':nom'=>$nom,':age'=>$age,':id'=>$id])){
        header("Refresh:0; url=display.php");
        echo '<script>alert("DATA UPADTED ! ")</script>'; 
    }
    else{
        header("Refresh:0; url=display.php");
        echo '<script>alert("DATA NOT UPADTED !!! ")</script>';
    }
}

else if(isset($_POST['cancel'])){
    header("Refresh:0; url=display.php");
}


?>