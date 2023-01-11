<?php
class announcementForm {
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
    //champ type de bien
    public function typeProperty($typeProperty){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="typeProperty" class="col-form-label">Type de bien : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="typeProperty" class="form-control" name="'.$typeProperty.'">
        </div>
    </div>';
    }
    //champ surface
    public function surface ($surface){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="surface" class="col-form-label">Surface : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="surface" class="form-control" name="'.$surface.'">
        </div>
    </div>';
    }
    //champ description
    public function desription ($description){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="description" class="col-form-label">Description : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="description" class="form-control" name="'.$description.'">
        </div>
    </div>';
    }
    //champ prix
    public function price ($price){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="price" class="col-form-label">Prix : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="price" class="form-control" name="'.$price.'">
        </div>
    </div>';
    }
    //champ adresse
    public function adress ($adress){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="adress" class="col-form-label">Adresse : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="adress" class="form-control" name="'.$adress.'">
        </div>
    </div>';
    }
    //champ code postal
    public function postalCode ($postalCode){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="postalCode" class="col-form-label">Code Postal : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="postalCode" class="form-control" name="'.$postalCode.'">
        </div>
    </div>';
    }
    //champ date de mise en vente
    public function dateSale ($dateSale){
        echo'<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="dateSale" class="col-form-label">Date de mise en vente : </label>
        </div>
        <div class="col-auto">
            <input type="date" id="dateSale" class="form-control" name="'.$dateSale.'">
        </div>
    </div>';
    }
    //champ  email du propriétaire
    public function propertyEmail($propertyEmail){
        echo '<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="propertyEmail" class="col-form-label">Email propriétaire : </label>
        </div>
        <div class="col-auto">
            <input type="date" id="propretyEmail" class="form-control" name="'.$propertyEmail.'">
        </div>
    </div>';
    }
    //champ téléphone propriétaire
    public function propertyPhone ($propertyPhone){
        echo'<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="propertyPhone" class="col-form-label">Téléphone propriétaire : </label>
        </div>
        <div class="col-auto">
            <input type="number" id="propertyPhone" class="form-control" name="'.$propertyPhone.'">
        </div>
    </div>';
    }
    //champ image
    public function picture ($picture){
        echo'<div class="row g-3 align-items-center mt-1">
        <div class="col-auto">
            <label for="image" class="col-form-label">Image/Photo : </label>
        </div>
        <div class="col-auto">
            <input type="text" id="image" class="form-control" name="'.$picture.'">
        </div>
    </div>';
    }
    //Boutton valider le formulaire
    public function button ($send){
        echo  '<button type="button" name="'.$send.'" class="btn btn-primary mt-5 ms-3"> Valider </button>';
    }
}
?>