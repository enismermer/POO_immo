<?php
include 'FormController.php';
class RegisterForm extends addDB{
    
//champ nom
    public function lastName($lastName){
        echo '<div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <label for="lastName" class="col-form-label">Nom : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="lastName" class="form-control"' .$lastName.'">
        </div>
    </div>';
    }
//champ prenom
    public function firstName($firstName){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="firstName" class="col-form-label">Prénom : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="firstName" class="form-control" name="'.$firstName.'">
        </div>
    </div>';
    }
//champ email
    public function email($email){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="email" class="col-form-label">Email : </label>
        </div>
        <div class="col-auto">
            <input type="email" id="email" class="form-control" name="'.$email.'">
        </div>
    </div>';
    }
//champ mot de passe
    public function password($password){
        echo ' <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="password" class="col-form-label">Mot de passe : </label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" class="form-control" name="'.$password.'">
        </div>
    </div>';
    }
//champ  téléphone
    public function phone($phone){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="phone" class="col-form-label">Téléphone : </label>
        </div>
        <div class="col-auto">
            <input type="tel" id="phone" class="form-control" name="'.$phone.'">
        </div>
    </div>';
    }

//champ  age    
    public function age ($age){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="age" class="col-form-label">Age : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="age" class="form-control" name="'.$age.'">
        </div>
    </div>';
    }
//champ  sexe
    public function sex ($sex){
        echo ' <select name="'.$sex.'" class="form-select selectRegister mt-4" id="floatingSelect"
        aria-label="Floating label select example">
        <option selected>Sexe</option>
        <option value="1">Homme</option>
        <option value="2">Femme</option>
        <option value="3">Non binaire</option>
    </select>';
    }
//button d'envoie du formulaire
    public function button ($send){
        echo '<button type="submit" name="'.$send.'" class="btn btn-primary mt-5">S\'inscrire</button>';
    }

    
}

?>