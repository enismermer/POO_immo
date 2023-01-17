<?php
session_start();
require 'FormController.php';
class AnnouncementFormController extends FormController {
    
    public function Announcement ($title, $propertyType, $surface, $description, $purchasePrice, $rentPrice, 
    $adress, $postalCode, $saleDate, $propertyEmail, $propertyPhone, $picture){
        FormController::addAnn($title, $propertyType, $surface, $description, $purchasePrice, $rentPrice, 
        $adress, $postalCode, $saleDate, $propertyEmail, $propertyPhone, $picture);
        echo '
        <form method="post" action="">
        <div class="row g-3 align-items-center mt-2">
        <div class="col-auto">
            <label for="title" class="col-form-label">Titre : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="title" class="form-control" name="'.$title.'">
            </div>
            </div>
            <div class=" row g-3 align-items-center mt-1">
                <div class="col-auto">
                    <label for="typeProperty" class="col-form-label">Type de bien : </label>
                </div>
                <div class="col-auto">
                    <input type="text" id="typeProperty" class="form-control" name="'.$propertyType.'">
            </div>
            </div>
            <div class="row g-3 align-items-center mt-1">
            <div class="col-auto">
                <label for="surface" class="col-form-label">Surface : </label>
            </div>
            <div class="col-auto">
                <input type="number" id="surface" class="form-control" name="'.$surface.'">
            </div>
            </div>
            <div class="row g-3 align-items-center mt-1">
            <div class="col-auto">
                <label for="description" class="col-form-label">Description : </label>
            </div>
            <div class="col-auto">
                <input type="text" id="description" class="form-control" name="'.$description.'">
            </div>
        </div>
        <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="purchasePrice" class="col-form-label">Prix acheter(€) : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="purchasePrice" class="form-control" name="'.$purchasePrice.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="rentPrice" class="col-form-label">Prix louer(€) : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="rentPrice" class="form-control" name="'.$rentPrice.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="adress" class="col-form-label">Adresse : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="adress" class="form-control" name="'.$adress.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="postalCode" class="col-form-label">Code Postal : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="postalCode" class="form-control" name="'.$postalCode.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="dateSale" class="col-form-label">Date de mise en vente : </label>
        </div>
        <div class="col-auto">
            <input type="date" id="dateSale" class="form-control" name="'.$saleDate.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="propertyEmail" class="col-form-label">Email propriétaire : </label>
        </div>
        <div class="col-auto">
            <input type="email" id="propretyEmail" class="form-control" name="'.$propertyEmail.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="propertyPhone" class="col-form-label">Téléphone propriétaire : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="propertyPhone" class="form-control" name="'.$propertyPhone.'">
        </div>
    </div>
    <div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="image" class="col-form-label">Image/Photo : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="image" class="form-control" name="'.$picture.'">
        </div>
    </div>
    <button type="submit" name="send" class="btn btn-primary mt-5 ms-3"> Valider </button>';
    }

}
?>