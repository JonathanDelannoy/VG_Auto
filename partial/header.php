<?php
require_once('bdd/connect-Db.php');
if (isset($_SESSION['id'])) {
    $co = '<div class="col-xl-2 col-6 col-4 w-100 p-0 m-0">
        <a class="text-light text-decoration-none d-flex justify-content-center header" href="profil.php?id=' . $_SESSION['id'] . '">Mon Compte</a>
        </div>
        <div class="col-xl-2 col-6 w-100 p-0 m-0">
        <a class="text-light text-decoration-none d-flex justify-content-center header" href="logout.php">Deconnexion</a>
        </div>';
} else {
    $co = '<div class="col-xl-2 col-6 col-4 w-100 p-0 m-0">
        <a class="text-light text-decoration-none d-flex justify-content-center header" href="inscription.php">S\'inscrire</a>
        </div>
        <div class="col-xl-2 col-6 w-100 p-0 m-0">
        <a class="text-light text-decoration-none d-flex justify-content-center header" href="connexion.php">Se connecter</a>
        </div>';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>

    <section class="container-fluid bg-dark">
        <div class="row d-flex">
            <div class="col-xl-8"></div>
            <?php
            echo $co;
            ?>
        </div>
    </section>
    <nav class="d-none d-sm-block m-0 p-0 sticky-top border-bottom bg-light">
        <div class="row m-0">
            <div class="col-lg-12 w-100 d-xl-flex justify-content-around p-0 m-0" id="collapsingNavbar2">
                <div class="col-xl-4 col-12 logo p-xl-0 m-xl-0">
                    <h3 class="text-center p-0 m-0"><strong><a class="couleur text-decoration-none" href="index.php">GOMES Valériano</a></strong></h3>
                    <p class="text-center p-0 m-0"><small>Réparation Véhicules Légers - Entretien - Carrosserie</small></p>
                </div>
                <ul class="topBotomBordersOut text-center col-xl-8 col-12 d-sm-flex p-0 m-0 my-2">
                    <li class="nav-item col-xl-3 col-sm-4 my-auto p-xl-0 m-xl-0"><a class="a nav-link couleur px-0" href="explanations.php">Comment ça marche ?</a></li>
                    <li class="nav-item col-xl-3 col-sm-4 my-auto p-xl-0 m-xl-0"><a class="a nav-link couleur px-0" href="services.php">Nos services</a></li>
                    <li class="nav-item col-xl-3 col-sm-4 my-auto p-xl-0 m-xl-0"><a class="a nav-link couleur px-0" href="prices.php">Nos prix</a></li>
                    <li class="col-xl-3 my-auto p-0 m-0 "><a href="contact.php" class="delete"><button class="nav-item btn btn-success w-75"><strong>Prendre RDV</strong></button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="menu d-sm-none"><span></span></div>

    <nav id="nav">
        <div class="w-100 p-0 m-0">
            <ul class="text-center col-12 p-0 m-0">
                <li class="nav-item"><a class="nav-link couleur1" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link couleur1" href="explanations.php">Comment ça fonctionne ?</a></li>
                <li class="nav-item"><a class="nav-link couleur1" href="services.php">Nos services</a></li>
                <li class="nav-item"><a class="nav-link couleur1" href="prices.php">Nos prix</a></li>
            </ul>
        </div>
    </nav>
    <div class="overlay"></div>