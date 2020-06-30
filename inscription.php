<?php
$bad='';
require_once('admin/controllers.php');
require_once('partial/header.php');

?>

<section class="container my-5">
    <h2 class="couleur1 h1 text-center">Inscription</h2>
    <p class="text-center">C'est simple ET rapide !</p>
    <form class="row mt-4" method="GET">
    <input type="hidden" name="effect" value="append">
        <div class="col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="name">Nom</label>
            <input class="col-6 my-auto" type="text" name="name" id="name">
        </div>
        <div class="col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="surname">Prénom</label>
            <input class="col-6 my-auto" type="text" name="surname" id="surname">
        </div>
        <div class="col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="email">Email</label>
            <input class="col-6 my-auto" type="email" name="email" id="email">
        </div>
        <div class="col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="password">Mot de passe</label>
            <input class="col-6 my-auto" type="password" name="password" id="password">
        </div>
        <div class="col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="address">Adresse</label>
            <input class="col-6 my-auto" type="text" name="address" id="address">
        </div>
        <div class="col-md-5 col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="city">Ville</label>
            <input class="col-6 my-auto" type="text" name="city" id="city">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 col-12 d-flex justify-content-center my-2">
            <label class="col-6 my-auto p-0" data-error="wrong" data-success="right" for="cp">Code Postal</label>
            <input class="col-6 my-auto" type="number" name="cp" id="cp">
        </div>
        <div class="col-xl-12 text-center my-5">
            <button type="submit" class="btn btn-outline-success font-weight-bold w-50">Envoyer</button>
        </div>
        <?php
            echo $bad;
            ?>
        <div class="col-12 p-0 m-0">
            <div class="d-flex justify-content-center mt-2">
                <p class="text-center">Déjà un compte ?<br>
                    <a class="text-decoration-none text-success" href="connexion.php">Connectez-vous !</a>
                </p>
            </div>
        </div>
    </form>
</section>

<?php
require_once 'partial/footer.php'
?>