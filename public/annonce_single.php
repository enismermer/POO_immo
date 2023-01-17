<!--récupérer l'id dans l'url-->
<!--requet a la bdd avec l'id en $_GET-->


<?php
require '../Controllers/FormController.php';
$annonce = FormController::createAnnonce();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Immo - Annonce</title>
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
    <section style="margin-bottom: 3%;">
        <div class=" d-flex justify-content-end mx-4 mt-3">
            <?php if( isset($_SESSION['id']) && $_SESSION['id'] !== null ){ ?>
            <a href=""><button type="button" class="btn btn-primary">Modifier</button></a>
            <form action="../actions/delete.php?id=<?php echo $annonce["id_annonce"]?>" method="post">
                <button type="submit" class="btn btn-danger ms-5" name="delete">Supprimer</button>
            </form>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">

                <h1><?php echo $annonce["titre"] ?></h1>
                <img src="<?php echo $annonce["image"] ?>" class="img-annonce" alt="appartement n°1"
                    style="margin-bottom: 10%; margin-left: 6%; width: 115%;">

            </div>
            <div class="col">
                <aside style="padding: 55px; margin-top: 50px;">
                    <form action="" method="post">

                        <h4>Contact</h4>
                        <div style="padding: 20px;">
                            <label for="name"><span style="color: red; font-weight: bold;">*</span> Nom :</label>
                            <input type="text" name="name" required>
                        </div>
                        <div style="padding: 20px;">
                            <label for="email"><span style="color: red; font-weight: bold;">*</span> Email :</label>
                            <input type="email" name="email" required>
                        </div>
                        <div style="padding: 20px;">
                            <label for="tel"><span style="color: red; font-weight: bold;">*</span> Tele :</label>
                            <input type="tel" name="tel" required>
                        </div>
                        <div style="padding: 20px;">
                            <button type="submit"><span style="font-size: 20px;">Envoyer</span></button>
                        </div>
                    </form>
                </aside>
            </div>
        </div>


        <div class="choix">

            <h2><?php echo $annonce["prix_achat"]?>€ / <?php echo $annonce["prix_louage"]?>€</h2>


            <button type="button"><span>Louer</span></button>
            <button type="button" style="background-color: #71E28A; border: 1px solid #71E28A;">
                <span>Acheter</span></button>
        </div>

        <div class="description" style="width: 56%;">

            <h3>Description</h3>

            <p> Type de bien : <?php echo $annonce["type_de_bien"];?> </p>
            <p> Adresse : <?php echo $annonce["adresse"];?> </p>
            <p> Surface : <?php echo $annonce["surface"];?> m²</p>
            <p> <?php echo $annonce["description"];?> </p>
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