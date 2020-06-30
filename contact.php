<?php
require_once 'partial/header.php';
require_once 'admin/controllers.php'
?>

<section class="my-5 container">
    <h2 class="text-center couleur1 mt-5">Contact</h2>
    <p class="text-center mt-4 mb-5">Pour toutes demandes, veuillez remplir ce formulaire.</p>
    <form action="" method="GET" class="row col-lg-12 p-0 m-0">
        <input type="hidden" name="action" value="add">
        <div class="d-lg-flex resp-contact justify-content-center my-4 col-lg-12 p-0">
            <label class="col-lg-6 col-12" for="presta-select">Quel est l'objet de votre demande</label>
            <select class="col-lg-6 col-12" name="presta" id="presta-select">
                <option value="">Choisissez votre prestation</option>
                <option value="Demande de devis">Demande de devis</option>
                <option value="Demande d'expertise">Demande d'expertise</option>
                <option value="Demande de RDV">Demande de RDV</option>
                <option value="Demande d'aide">Demande d'aide</option>
                <option value="Demande de réclamation">Demande de réclamation</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div class="d-lg-flex resp-contact justify-content-center my-4 col-lg-12 p-0">
            <label class="col-lg-6 col-12" for="immat">Immatriculation de votre véhicule</label>
            <input class="col-lg-6 col-12" type="text" id="immat" name="immat" placeholder="XX - 000 - XX">
        </div>
        <div class="d-lg-flex resp-contact justify-content-center my-4 col-lg-12 p-0">
            <label class="col-lg-6 col-12" for="message">Votre Message</label>
            <textarea class="col-lg-6 col-12" id="message" cols="15" rows="5" name="message" maxlength="250"></textarea>
        </div>
        <h6 class="text-center couleur1 my-4 col-lg-12">Pour que nous puissions vous recontacter</h6>
        <div class="col-lg-12 d-lg-flex p-0 m-0">
            <div class="my-4 col-lg-4 col-12">
                <label class="col-lg-12 text-center" for="civ">Civilité</label>
                <select class="col-lg-12 pb-1" name="civ" id="civ">
                    <option value=""></option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="d-sm-flex col-lg-8 col-12 m-0 p-0">
                <div class="my-4 col-sm-6 col-12 m-0">
                    <label class="col-lg-12 text-center">Nom</label>
                    <input class="col-lg-12" type="text">
                </div>
                <div class="my-4 col-sm-6 col-12 m-0">
                    <label class="col-lg-12 text-center">Prénom</label>
                    <input class="col-lg-12" type="text">
                </div>
            </div>
        </div>
        <div class="my-4 col-12 d-sm-flex">
            <label class="col-sm-6 col-12 resp-opinions1" for="email">Email</label>
            <input class="col-sm-6" type="text" id="email" name="email">
        </div>
        <div class="my-4 col-12 d-sm-flex">
            <label class="col-sm-6 resp-opinions1" for="tel">Numéro de téléphone</label>
            <input class="col-sm-6" type="text" id="tel" name="tel">
        </div>
        <div class="my-4 col-12 d-flex p-0">
            <input class="col-sm-1 col-2 my-auto p-0" type="checkbox">
            <label class="col-sm-11  col-10 m-0 p-0" required>J'accepte que les informations fournis soit utilisés pour la prise de contact commerciale par mon mécanicien.</label>
        </div>
        <div class="col-lg-12 text-center my-5">
            <button type="submit" class="btn btn-outline-success font-weight-bold w-50">Envoyer</button>
        </div>
        <?php
            if (isset($_GET['action'])){
                if (!empty($_GET['presta']) AND !empty($_GET['immat']) AND !empty($_GET['message']) AND !empty($_GET['civ']) AND !empty($_GET['tel'])){
                    echo '<span class="col-12 text-center text-success mt-2 mb-5">Votre message a bien été envoyé</span>';
                }else{
                    echo '<span class="col-12 text-center text-danger mt-2 mb-5">Tous les champs doivent être remplis</span>';
                }
            }
        ?>
    </form>
</section>

<?php
require_once 'partial/footer.php'
?>