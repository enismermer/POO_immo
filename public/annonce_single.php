<!--récupérer l'id dans l'url-->
<!--requet a la bdd avec l'id en $_GET-->



<?php
$data = [
[
"id_annonce" => 1,
"nom" => "Maison sur les quais",
"type_de_bien" => "maison",
"surface" => 150,
"description" => "Qui obcaecati quas non suscipit delectus in quam soluta quo iusto molestiae eos reprehenderit
blanditiis et molestiae dolorem qui blanditiis obcaecati. Non ipsa quaerat sed eveniet ducimus sit molestiae quas qui
voluptatem commodi qui tenetur minus. ",
"prix_achat" => 120000,
"adresse" => "18 rue du lac",
"code_postal" => "38000",
"date" => "12/12/2023",
"email" => "toto@gmail.com",
"telephone" => "0708090706",
"prix_louage" => 15000,
"image" => "https://placeimg.com/640/480/arch",

],
[
"id_annonce" => 2,
"nom" => "appartement sur la plage",
"type_de_bien" => "appartement",
"surface" => 70,
"description" => "Qui obcaecati quas non suscipit delectus in quam soluta quo iusto molestiae eos reprehenderit
blanditiis et molestiae dolorem qui blanditiis obcaecati. Non ipsa quaerat sed eveniet ducimus sit molestiae quas qui
voluptatem commodi qui tenetur minus. ",
"prix_achat" => 1200000000,
"adresse" => "18 rue de la plage",
"code_postal" => "62120",
"date" => "01/12/2023",
"email" => "tata@gmail.com",
"telephone" => "0708090706",
"prix_louage" => 1500000000,
"image" => "https://placeimg.com/640/480/arch",

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
    <link rel="stylesheet" href="css/annonce.css" type="text/css">
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


    <!---------------- Section ---------------->
    <section>
        <div class="row">
            <div class="col">
                <h1><?php echo $data[$_GET["id"]-1]["nom"] ?></h1>

                <img src="<?php echo $data[$_GET["id"]-1]["image"] ?>" class="img-annonce" alt="appartement n°1">

            </div>
            <div class="col">
                <aside>
                    <form action="" method="post">

                        <h4>Contact</h4>

                        <label for="name"><span style="color: red; font-weight: bold;">*</span> Nom :</label>
                        <input type="text" name="name">

                        <label for="email"><span style="color: red; font-weight: bold;">*</span> Email :</label>
                        <input type="email" name="email">

                        <label for="tel"><span style="color: red; font-weight: bold;">*</span> Tele :</label>
                        <input type="tel" name="tel">

                        <button type="submit"><span style="font-size: 20px;">Envoyer</span></button>
                    </form>
                </aside>
            </div>
        </div>


        <div class="choix">

            <h2>1515 €</h2>

            <button type="button" style="background-color: #69B092; border: 1px solid #69B092"><span
                    style="font-size: 30px;">Louer</span></button>
            <button type="button" style="background-color: #71E28A; border: 1px solid #71E28A;"><span
                    style="font-size: 30px;">Acheter</span></button>
        </div>
        <div class="description">

            <h3>Description</h3>

            <p>Lorem ipsum dolor sit amet. Ea dolorem culpa est debitis aperiam sed quia voluptatem qui suscipit ipsam
                ea galisum maxime aut eveniet nihil vel voluptatem impedit.


                Vel tenetur consequuntur et optio officiis ut autem molestiae quo quidem velit qui praesentium quibusdam
                rem delectus aliquid in quia esse. Sit cumque accusamus non rerum.
            </p>
        </div>

    </section>


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