<?php

function ajouter($a, $b, $c, $d){

    if(require("database.php")){
        $requete= $database->prepare("INSERT INTO utilisateur (email, nom, prenom, age) VALUES (?, ?, ?, ?)") ;
        $requete->execute(array($a, $b, $c, $d));
        $requete->closeCursor() ;
    }
}

function afficher(){
    if(require("database.php")){
        $requete= $database->prepare("SELECT * FROM utilisateur") ;
        $requete->execute() ;
        $tableau= $requete->fetchAll(PDO::FETCH_OBJ) ; 
        return $tableau ;
        $requete->closeCursor() ;
    }
}

function modifier($email, $nom, $prenom, $age, $id){
    if(require("database.php"))
    {
        $requete = $database->prepare("UPDATE utilisateur SET email=?, nom=?, prenom=?, age=? WHERE id=?");
        $requete->execute(array($email, $nom, $prenom, $age, $id));
        $requete->closeCursor();
    }
}


function supprimer($id){
    if(require("database.php")){
        $requete= $database->prepare("DELETE FROM utilisateur WHERE id=?") ;
        $requete->execute(array($id));
        $requete->closeCursor() ;
    }
}

function getUser($email, $password){

    if(require("database.php"))
    {
        $requete= $database->prepare("SELECT * FROM `admin` WHERE id=1");
        $requete->execute();

        if($requete->rowCount() == 1){
            $data = $requete->fetchAll(PDO::FETCH_OBJ);

            foreach($data as $i){
                $dataEmail = $i->email;
                $dataMdp = $i->mdp;
            }

            if($dataEmail == $email AND $dataMdp == $password){
                return $data;
            }else{
                return false;
            }
        }

        

        return $data;

        $requete->closeCursor();
    }

}

?>