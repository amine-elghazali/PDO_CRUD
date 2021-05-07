<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>


<?php
    require 'connecte.php';

    $id=$_GET['id'];
    $sql='SELECT * FROM etudiant WHERE id=:id';
    $req=$bdd->prepare($sql);
    $req->execute([':id'=>$id]);
    $tab=$req->fetch();

?>
<body class="bg-dark">
    <div class="card mt-5" style="width:50%;margin:auto;">
        <div class="card-header">
            <h2>Mettre à jour : </h2>
        </div>

        <div class="card-body">
            <form method="post" action="updatebtn.php">
                <div class="form-group">
                    <label for="id">id : </label>
                        <input type="text" name="id" id="id" value="<?php echo $tab['id'] ?>" class="form-control">   <br/>
                </div>

                <div class="form-group">
                    <label for="nom">nom : </label>
                        <input type="text" name="nom" id="nom" value="<?php echo $tab['nom'] ?>" class="form-control"> <br/>
                </div>

                <div class="form-group">
                <label for="age"> age: </label>
                    <input type="text" name="age" id="age"  value="<?php echo $tab['age'] ?>" class="form-control"> <br/>
                <div>

                <input type="submit" name="updatebtn" value="mettre à jour" class="btn btn-outline-light  btn-success">
                <input type="submit" name="cancel" value="Annuler" class="btn btn-outline-light btn-warning">
            </form>
        </div>
    </div>
</body>


</html>