<?php
require('../config/BDConnexion.php');

class FormController{
public function addRegister($lastName, $firstName, $email, $password, $phone, $age, $sex) {
    if(isset($_POST['send'])) {
     if(!empty($_POST[$lastName]) && !empty($_POST[$firstName]) && !empty($_POST[$email])
     && !empty($_POST[$password]) && !empty($_POST[$phone]) && !empty($_POST[$age]) 
     && !empty($_POST[$sex])) {
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
public function log($email,  $password){
   if(isset($_POST['send'])){
      if(!empty($_POST[$email]) && !empty($_POST[$password])){
         $email = htmlspecialchars($_POST[$email]);
         $password = sha1($_POST[$password]);
         $bdd=db();
         $recupUser =$bdd->prepare('SELECT * FROM admin WHERE email = ? AND mot_de_passe = ?');
         $recupUser -> execute(array($email,  $password));

         if($recupUser->rowCount()>0){
            $_SESSION[$email] = $email;
            $_SESSION[$password] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
        header('Location:accueil_admin.php');
      }else{
         echo "Veuillez remplir tous les champs";
      }
   }
}

public function addAnnounce($lastName, $typeProperty, $surface, $description, $price, $adress, $postalCode, $dateSale, $propertyEmail, $propertyPhone, $picture) {
   if(isset($_POST['send'])) {
    if(!empty($_POST[$lastName]) && !empty($_POST[$typeProperty]) && !empty($_POST[$surface])
    && !empty($_POST[$description]) && !empty($_POST[$price]) && !empty($_POST[$adress]) 
    && !empty($_POST[$postalCode]) && !empty($_POST[$dateSale]) && !empty($_POST[$propertyEmail])
    && !empty($_POST[$propertyPhone]) && !empty($_POST[$picture])) {
       $lastName = htmlspecialchars($_POST[$lastName]);
       $typeProperty = htmlspecialchars($_POST[$typeProperty]);
       $surface = htmlspecialchars($_POST[$surface]);
       $description = sha1($_POST[$description]);
       $price = htmlspecialchars($_POST[$price]);
       $adress = htmlspecialchars($_POST[$adress]);
       $postalCode = htmlspecialchars($_POST[$postalCode]);
       $dateSale = htmlspecialchars($_POST[$dateSale]);
       $propertyEmail = htmlspecialchars($_POST[$propertyEmail]);
       $propertyPhone = htmlspecialchars($_POST[$propertyPhone]);
       $picture = htmlspecialchars($_POST[$picture]);


       $sql = 'INSERT INTO annonce(nom, type_de_bien, surface, description, prix_achat, prix_louage, adresse, code_postal, date, email, telephone, image)
       VALUES (:lastname, :type_property, :surface, :description, :price, :adress, :postalCode, :dateSale, :propertyEmail, :propertyPhone, :picture)';
       $bdd = db();
       $query = $bdd->prepare($sql);
       $query -> bindValue(':lastName', $lastName, PDO::PARAM_STR);
       $query -> bindValue(':type_property', $typeProperty, PDO::PARAM_STR);
       $query -> bindValue(':surface', $surface, PDO::PARAM_STR);
       $query -> bindValue(':description', $description, PDO::PARAM_STR);
       $query -> bindValue(':price', $price, PDO::PARAM_INT);
       $query -> bindValue(':adress', $adress, PDO::PARAM_STR);
       $query -> bindValue(':postalCode', $postalCode, PDO::PARAM_INT);
       $query -> bindValue(':dateSale', $dateSale, PDO::PARAM_STR);
       $query -> bindValue(':propertyEmail', $propertyEmail, PDO::PARAM_STR);
       $query -> bindValue(':propertyPhone', $propertyPhone, PDO::PARAM_INT);
       $query -> bindValue(':picture', $picture, PDO::PARAM_STR);
       
       $query -> execute();
       header('Location:loginForm.php');

    }else{
       echo "Veuillez remplir tous les champs";
    }
}

}

}
?>