<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>

<header>
    <div class="container pt-3">
        <nav class="navbar  ">
            <a class="navbar-brand btn btn-outline-light " href="index.php">Ajouter un nouvel étudiant</a>
            <a class="navbar-brand btn btn-outline-light btn-dark " href="display.php">Display added students </a>
        </nav>
    </div>
</header>

<body class="bg-dark">
    <div class="card mt-5" style="width:75rem;margin:auto;">
        <div class="card-header">
            <h2>insérer un etudiant : </h2>
        </div>

        <div class="card-body">
            <form method="POST" action="insert.php">
                <div class="form-group">
                    <label for="id"><h5>id :</h5>  </label>
                        <input type="text" name="id" id="id" class="form-control">   <br/>
                </div>

                <div class="form-group">
                    <label for="nom"><h5>nom :</h5> </label>
                        <input type="text" name="nom" id="nom" class="form-control"> <br/>
                </div>

                <div class="form-group">
                <label for="age"><h5> age : </h5></label>
                    <input type="text" name="age" id="age" class="form-control"> <br/>
                <div>

                <input type="submit" name="btn" value="insérer" class="btn btn-outline-dark btn-light">
            </form>
        </div>
    </div>
</body>


</html>