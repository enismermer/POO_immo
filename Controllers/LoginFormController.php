<?php
session_start();
require 'FormController.php';
class LoginFormController extends FormController{

   public function input($email, $password){
    FormController::log($email, $password);
        echo '
        <form method="post" action="">
        <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="email" class="col-form-label">Email : </label>
        </div>
        <div class="col-auto">
            <input type="email" id="email" class="form-control" name="'.$email.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="password" class="col-form-label">Mot de passe : </label>
        </div>
        <div class="col-auto">
            <input type="password" id="password" class="form-control" name="'.$password.'">
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-5" name="send">Se connecter</button>
    <a href="./registerForm.php"><button type="button"
        class="btn btn-primary mt-5 ms-3"> S\'inscrire </button></a>
        </form>';
   }
}
?>