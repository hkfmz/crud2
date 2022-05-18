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
<h1 style="text-align: center">Modifier les informations d'un utilisateur</h1>
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
            <form method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Identifiant</label>
                <input type="number" class="form-control" name="identifiant" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Veuillez renseigner l'email...">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="name" class="form-control" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="name" class="form-control" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <input type="submit" class="btn btn-danger" value="Envoyer" name="envoyer">
            </form>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php



if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['age'])AND !empty($_POST['identifiant']))
    {
        $identifiant = $_POST['identifiant'];
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        modifier($email, $nom, $prenom, $age, $identifiant);
    }
}

}
?>
