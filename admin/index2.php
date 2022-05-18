<?php
session_start();
include "../config/fonction.php" ;


if(!isset($_SESSION['admin'])){
    if(empty($_SESSION['admin'])){
        
        header("Location: ../login.php");
    }
}
else {

$infoAdmin = $_SESSION['admin'];

$utilisateurs= afficher();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center">Afficher les informations de tous les utilisateurs</h1>
<br>
    <ul style="list-style: none; display:flex; justify-content:space-evenly">
        <li><a href="index2.php">Afficher</a></li>
        <li><a href="index.php">Ajouter</a></li>
        <li><a href="index4.php">Modifier</a></li>
        <li><a href="index3.php">Supprimer</a></li>
        <li><a href="deconn.php">Se deconnecter</a></li>
    </ul>
<div class="container-fluid">
<br><br>
    <div class="row" style="display:flex; justify-content:center">
        <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($utilisateurs as $utilisateur): ?>

                <tr>
                    <th scope="row"><?= $utilisateur->id ?></th>
                    <td><?= $utilisateur->nom ?></td>
                    <td><?= $utilisateur->prenom ?></td>
                    <td><?= $utilisateur->email ?></td>
                    <td><?= $utilisateur->age ?></td>
                </tr>

            <?php endforeach ; ?>

            </tbody>
        </table>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
}

?>
