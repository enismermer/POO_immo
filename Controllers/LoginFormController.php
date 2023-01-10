<?php
namespace app;
class loginForm{

    //Champ email 
   public function input($name){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="email" class="col-form-label">Email : </label>
        </div>
        <div class="col-auto">
            <input type="email" id="email" class="form-control" name="'.$name.'">
        </div>
    </div>';

    }
    //Champ mot de passe
    public function inputPassword($mdp){
        echo'<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="password" class="col-form-label">Mot de passe : </label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" class="form-control" name="'.$mdp.'">
        </div>
    </div>';
    }
    
    //Champ boutton submit
    public function submit($send){
        echo '<button type="button" class="btn btn-primary mt-5" name="'.$send.'">Se connecter</button>';
    }
    //Champ lien ver le formulaire d'inscription
    public function button (){
        echo  '<a href="./registerForm.php"><button type="button"
        class="btn btn-primary mt-5 ms-3"> S\'inscrire </button></a>';
    }
}


?>