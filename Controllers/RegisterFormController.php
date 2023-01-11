<?php
require 'FormController.php';
use addDB;
class RegisterFormController extends addDB{
//champ nom
    public function Register($lastName , $firstName, $email, $password, $phone, $age, $sex){
        addDB::addRegister($lastName, $firstName, $email, $password, $phone, $age, $sex);
        echo '
        <form method="post" action="">
        <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <label for="lastName" class="col-form-label">Nom : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="lastName" class="form-control" name='.$lastName.'>
        </div>
    </div>
        <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="firstName" class="col-form-label">Prénom : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="firstName" class="form-control" name="'.$firstName.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="email" class="col-form-label">Email : </label>
        </div>
        <div class="col-auto">
            <input type="email" id="email" class="form-control" name="'.$email.'">
        </div>
    </div> <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="password" class="col-form-label">Mot de passe : </label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" class="form-control" name="'.$password.'">
        </div>
    </div>  
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="phone" class="col-form-label">Téléphone : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="phone" class="form-control" name="'.$phone.'">
        </div>
    </div>
    

<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="age" class="col-form-label">Age : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="age" class="form-control" name="'.$age.'">
        </div>
    </div> <select name="'.$sex.'" class="form-select selectRegister mt-4" id="floatingSelect"
        aria-label="Floating label select example">
        <option selected>Sexe</option>
        <option value="1">Homme</option>
        <option value="2">Femme</option>
        <option value="3">Non binaire</option>
    </select>
    
<button type="submit" name="send" class="btn btn-primary mt-5">S\'inscrire</button>
</form>';
    }

    
}

?>