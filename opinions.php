<?php
require_once 'partial/header.php';
$erreur = '';
$star = '';
if (isset($_POST['submit'])) {
    $star = htmlspecialchars($_POST['star']);
    $opinion_name = htmlspecialchars($_POST['opinion_name']);
    $opinion_surname = htmlspecialchars($_POST['opinion_surname']);
    $msg = htmlspecialchars($_POST['msg']);
    if (($_POST['opinion_name']) and ($_POST['opinion_surname']) and ($_POST['msg'])) {
        $stmt = $bdd->prepare("INSERT INTO xxx_opinions (star, opinion_name, opinion_surname, msg) VALUES (:star, :opinion_name, :opinion_surname, :msg)");
        $stmt->bindValue('star', $star, PDO::PARAM_INT);
        $stmt->bindValue('opinion_name', $opinion_name, PDO::PARAM_STR);
        $stmt->bindValue('opinion_surname', $opinion_surname, PDO::PARAM_STR);
        $stmt->bindValue('msg', $msg, PDO::PARAM_STR);
        $stmt->execute();
        $erreur = '<span class="col-12 text-center text-success mb-5">Bravo ! Votre avis a été enregistré</span>';
    } else {
        $erreur = '<span class="col-12 text-center text-danger mb-5">Tous les champs doivent être complétés</span>';
    }
}
?>


<section class="my-5 container p-0">
    <h2 class="text-center couleur1">Votre avis</h2>
    <p class="text-center"><small>Parce que l'on se soucis de l'avis de nos clients !</small></p>
    <form action="" method="POST">
        <div class="col-md-12 d-md-flex justify-content-center resp-opinions my-5">
            <span class="col-md-6 col-12 my-auto">Nombre d'étoiles attribuées <small>(sur 5)</small></span>
            <div class="col-md-6 col-12 mt-3 text-center">
                <input type="radio" class="star-input" name="star" id="star-1" value="1">
                <label for="star-1" class="star"><i class="fas fa-star fa-2x"></i></label>
                <input type="radio" class="star-input" name="star" id="star-2" value="2">
                <label for="star-2" class="star"><i class="fas fa-star fa-2x"></i></label>
                <input type="radio" class="star-input" name="star" id="star-3" value="3">
                <label for="star-3" class="star"><i class="fas fa-star fa-2x"></i></label>
                <input type="radio" class="star-input" name="star" id="star-4" value="4">
                <label for="star-4" class="star"><i class="fas fa-star fa-2x"></i></label>
                <input type="radio" class="star-input" name="star" id="star-5" value="5">
                <label for="star-5" class="star"><i class="fas fa-star fa-2x"></i></label>
            </div>
        </div>
        <div class="col-md-12 d-md-flex justify-content-center resp-opinions my-4">
            <label class="col-md-6 col-12" for="opinion_name">Nom</label>
            <input class="col-md-6 col-12" type="text" name="opinion_name">
        </div>
        <div class="col-md-12 d-md-flex justify-content-center resp-opinions my-4">
            <label class="col-md-6 col-12" for="opinion_surname">Prénom</label>
            <input class="col-md-6 col-12" type="text" name="opinion_surname">
        </div>
        <div class="col-md-12 d-md-flex justify-content-center resp-contact my-4">
            <label class="col-md-6 col-12" for="msg">Votre Message</label>
            <textarea class="col-md-6 col-12" cols="15" rows="5" name="msg" maxlength="250"></textarea>
        </div>
        <div class="col-md-12 text-center my-5 p-0">
            <input name="submit" type="submit" class="btn btn-outline-success font-weight-bold w-50">
        </div>
        <?= $erreur ?>
    </form>
</section>

<?php
require_once 'partial/footer.php';
?>