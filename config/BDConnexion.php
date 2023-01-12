<?php
require '../env.php';
function db (){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=poo_immo;charset=utf8', LOGIN_DB, MDP_DB);
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException$e){
        print"Erreur!:".$e->getMessage()."<br/>";
        die();
    }
return $bdd;
}
?>