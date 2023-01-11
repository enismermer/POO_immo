<?php
function db (){
    try {
        $bdd = new PDO('mysql:host=localhost;port=8080;dbname=poo_immo;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException$e){
        print"Erreur!:".$e->getMessage()."<br/>";
        die();
    }
return $bdd;
}
?>