<!-- se connecter a la bdd  -->
<!-- récuperer toutes les annonces -->
<!-- stocker dans une variable les données -->
<?php
$data = [
    [
        "id_annonce" => 1,
        "nom" => "Maison sur les quais",
        "type_de_bien" => "maison",
        "surface" => 150,
        "description" => "Qui obcaecati quas non suscipit delectus in quam soluta quo iusto molestiae eos reprehenderit blanditiis et molestiae dolorem qui blanditiis obcaecati. Non ipsa quaerat sed eveniet ducimus sit molestiae quas qui voluptatem commodi qui tenetur minus. ",
        "prix_achat" => 120000,
        "adresse" => "18 rue du lac",
        "code_postal" => "38000",
        "date" => "12/12/2023",
        "email" => "toto@gmail.com",
        "telephone" => "0708090706",
        "prix_louage" => 15000,
        "image" => "https://placeimg.com/640/480/architecture",
        
    ],
    [
        "id_annonce" => 2,
        "nom" => "appartement sur la plage",
        "type_de_bien" => "appartement",
        "surface" => 70,
        "description" => "Qui obcaecati quas non suscipit delectus in quam soluta quo iusto molestiae eos reprehenderit blanditiis et molestiae dolorem qui blanditiis obcaecati. Non ipsa quaerat sed eveniet ducimus sit molestiae quas qui voluptatem commodi qui tenetur minus. ",
        "prix_achat" => 1200000000,
        "adresse" => "18 rue de la plage",
        "code_postal" => "62120",
        "date" => "01/12/2023",
        "email" => "tata@gmail.com",
        "telephone" => "0708090706",
        "prix_louage" => 1500000000,
        "image" => "https://placeimg.com/640/480/architecture",
        
    ]
]
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Immo - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/accueil.css" type="text/css">
</head>

<body>
    <!-------------- Header ---------------->
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
    <br>
    <br>
    <!-------------- Bouton connexion --------->
    <div class="d-flex justify-content-end mb-3">
        <a href="loginForm.php">
            <div style="padding: 10px 3px;">Connexion</div>
        </a>
    </div>
    <!---------------- Section ---------------->
    <section>
        <!----------- 1ère ligne ------------>
        <div class="d-flex justify-content-around flex-wrap">
            <?php
        for($i = 0; $i <= 15; $i++){
            foreach($data as $annonce){
                
            
            
            ?>

            <div class="card" style="width: 20%; margin: 10px;">
                <a href="annonce_single.php?id=<?php echo $annonce["id_annonce"]?>" class="btn">
                    <img src=<?php echo $annonce["image"]; ?> class="card-img-top" alt="appartement n°1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $annonce["nom"]?></h5>
                        <br>
                        <h3> <?php echo $annonce["prix_achat"] ?>€</h3>
                    </div>
                </a>
            </div>
            <?php }} ?>
        </div>

    </section>
    <br>
    <br>
    <!--------------- Footer ---------------->
    <footer>
        <div class="footer">
            <p>© Copyright 2022 - POO Immo</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>