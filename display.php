<?php

require 'connecte.php';

$sql='SELECT * FROM etudiant';

$tab=$bdd->query($sql);    

?>


<html>

<header>
    <div class="container pt-3">
        <nav class="navbar  ">
            <a class="navbar-brand btn btn-outline-light " href="index.php">Ajouter un nouvel étudiant</a>
            <a class="navbar-brand btn btn-outline-light btn-dark " href="display.php">Display added students </a>
        </nav>
    </div>
</header>

<body style="width:75rem;" class="bg-dark  m-auto">
    <div class="card mt-5 mb-5">
        <div class="card-header">
            <h2>Affichage de la liste des étudiants</h2>
        </div>


        <div class="card-body">
            <table class=" table">
                <thead class="thead-dark">
                    <tr>
                        <th > id </th>
                        <th > nom </th>
                        <th > age </th>
                        <th > Éditer</td>
                        <th > Supprimer</th>
                    <tr>
                </thead>
                <?php   
                    while($donnees=$tab->fetch()){
                ?>

                    <tr>
                        <th><?php echo $donnees['id'];?></th>
                        <td><?php echo $donnees['nom'];?></td>
                        <td><?php echo $donnees['age'];?></td>
                        <td><a class="btn btn-outline-light btn-info"  href="edit.php?id=<?php echo $donnees['id'];?>">EDIT</a></td>
                        <td><a class="btn btn-outline-light btn-danger" href="delete.php?id=<?php echo $donnees['id'];?>" >DELETE</a></td>
                    </tr>

                <?php
                    }
                ?>
            </table>
        </div>
                
        <div class="card-footer">
            <p>Insére un nouveau etudiant :</p>
            <a href="index.php" class="btn btn-outline-dark btn-light" >Insérer</a>
        </div>

    </div>
</body>


</html>