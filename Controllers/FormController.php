<?php
require('../config/BDConnexion.php');

class FormController{
public function addRegister($lastName, $firstName, $email, $password, $phone, $age, $sex){
    if(isset($_POST['send'])){
     if(!empty($_POST[$lastName]) && !empty($_POST[$firstName]) && !empty($_POST[$email])
     && !empty($_POST[$password]) && !empty($_POST[$phone]) && !empty($_POST[$age]) 
     && !empty($_POST[$sex])){
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

public function addAnn($title, $propertyType, $surface, $description, $purchasePrice, $rentPrice, $adress, $postalCode, $saleDate, 
    $propertyEmail, $propertyPhone, $picture){
        if(isset($_POST['send'])){
            if(!empty($_POST[$title]) && !empty($_POST[$propertyType]) && !empty($_POST[$surface])
            && !empty($_POST[$description]) && !empty($_POST[$purchasePrice]) && !empty($_POST[$rentPrice]) 
            && !empty($_POST[$adress]) && !empty($_POST[$postalCode]) && !empty($_POST[$saleDate]) 
            && !empty($_POST[$propertyEmail]) 
            && !empty($_POST[$propertyPhone])&& !empty($_POST[$picture])){
               $title = htmlspecialchars($_POST[$title]);
               $propertyType = htmlspecialchars($_POST[$propertyType]);
               $surface = htmlspecialchars($_POST[$surface]);
               $description = htmlspecialchars($_POST[$description]);
               $purchasePrice = htmlspecialchars($_POST[$purchasePrice]);
               $rentPrice = htmlspecialchars(($_POST[$rentPrice]));
               $adress = htmlspecialchars($_POST[$adress]);
               $postalCode = htmlspecialchars($_POST[$postalCode]);
               $saleDate = htmlspecialchars($_POST[$saleDate]);
               $propertyEmail = htmlspecialchars($_POST[$propertyEmail]);
               $propertyPhone = htmlspecialchars($_POST[$propertyPhone]);
               $picture = htmlspecialchars($_POST[$picture]);
               
               $sql = 'INSERT INTO annonce (titre, type_de_bien, surface, description, prix_achat, adresse, code_postal, date, email, telephone, prix_louage, image)
               VALUES (:title, :propertyType, :surface, :description, :purchasePrice, :adress, :postalCode, :saleDate, :propertyEmail, :propertyPhone, :rentPrice, :picture )';
               $bdd = db();
               $query = $bdd->prepare($sql);
               $query -> bindValue(':title', $title, PDO::PARAM_STR);
               $query -> bindValue(':propertyType', $propertyType, PDO::PARAM_STR);
               $query -> bindValue(':surface', $surface, PDO::PARAM_INT);
               $query -> bindValue(':description', $description, PDO::PARAM_STR);
               $query -> bindValue(':purchasePrice', $purchasePrice, PDO::PARAM_INT);
               $query -> bindValue(':adress', $adress, PDO::PARAM_STR);
               $query -> bindValue(':postalCode', $postalCode, PDO::PARAM_INT);
               $query -> bindValue(':rentPrice', $rentPrice, PDO::PARAM_INT);
               $query -> bindValue(':saleDate', $saleDate, PDO::PARAM_STR);
               $query -> bindValue(':propertyEmail', $propertyEmail, PDO::PARAM_STR);
               $query -> bindValue(':propertyPhone', $propertyPhone, PDO::PARAM_STR);
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