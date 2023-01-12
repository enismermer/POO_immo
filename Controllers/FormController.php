<?php
require('../config/BDConnexion.php');

class FormController{
public function addRegister($lastName, $firstName, $email, $password, $phone, $age, $sex){
    if(isset($_POST['send'])){
     if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email'])
     && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['age']) 
     && !empty($_POST['sex'])){
        $lastName = htmlspecialchars($_POST[$lastName]);
        $firstName = htmlspecialchars($_POST[$firstName]);
        $email = htmlspecialchars($_POST[$email]);
        $password = sha1($_POST[$password]);
        $phone = htmlspecialchars($_POST[$phone]);
        $age = htmlspecialchars($_POST[$age]);
        $sex = htmlspecialchars($_POST[$sex]);

        $sql = 'INSERT INTO admin(nom, prenom, email, mot_de_passe, telephone, age, sexe)
        VALUES (:lastName, :firstName, :email, :password, :phone, :age, :sex)';
        $bdd = db();
        $query = $bdd->prepare($sql);
        $query -> bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $query -> bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $query -> bindValue(':email', $email, PDO::PARAM_STR);
        $query -> bindValue(':password', $password, PDO::PARAM_STR);
        $query -> bindValue(':phone', $phone, PDO::PARAM_STR);
        $query -> bindValue(':age', $age, PDO::PARAM_INT);
        $query -> bindValue(':sex', $sex, PDO::PARAM_STR);
        
        $query -> execute();
        header('Location:loginForm.php');

     }else{
        echo "Veuillez remplir tous les champs";
     }
}

}
}
?>