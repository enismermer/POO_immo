<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>POO Immo - announcement</title>
</head>
<!-- FORMULAIRE D'INSCRIPTION ADMIN -->
<main>
    <header>
        <img src="img/POO Immo.png" class="img-thumbnail" alt="logo">
        <!-------------- navigation ---------------->
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Localisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Type de bien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Surface min</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Budget</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="text" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="title text-center mt-5">
        <h1>Annonce</h1>
        <hr class="pill">
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="registerBackColor">
                    <form methode="POST" action="">
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                                <label for="lastName" class="col-form-label">Nom : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="lastName" class="form-control" name="lastName">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="typeProperty" class="col-form-label">Type de bien : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="typeProperty" class="form-control" name="typeProperty">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="surface" class="col-form-label">Surface : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="surface" class="form-control" name="surface">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="description" class="col-form-label">Description : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="description" class="form-control" name="description">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="price" class="col-form-label">Prix : </label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="price" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="adress" class="col-form-label">Adresse : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="adress" class="form-control" name="adress">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="postalCode" class="col-form-label">Code Postal : </label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="postalCode" class="form-control" name="postalCode">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="dateSale" class="col-form-label">Date de mise en vente : </label>
                            </div>
                            <div class="col-auto">
                                <input type="date" id="dateSale" class="form-control" name="dateSale">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="propertyEmail" class="col-form-label">Email propriétaire : </label>
                            </div>
                            <div class="col-auto">
                                <input type="date" id="propretyEmail" class="form-control" name="propretyEmail">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="propertyPhone" class="col-form-label">Téléphone propriétaire : </label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="propertyPhone" class="form-control" name="propertyPhone">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="image" class="col-form-label">Image/Photo : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="image" class="form-control" name="image">
                            </div>
                        </div>


                        <button type="button" class="btn btn-primary mt-5">S'Valider</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <p>© Copyright 2022 - POO Immo</p>
    </div>
</footer>