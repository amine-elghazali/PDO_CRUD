<?php
require"connecte.php";

$id=$_GET['id'];
$req=$bdd->prepare('DELETE FROM etudiant WHERE id='.$id);

$req->execute();

    header("Refresh:0; url=display.php");
?>

