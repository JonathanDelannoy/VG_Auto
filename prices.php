<?php
require_once 'partial/header.php'
?>

<section class="container my-5">
    <h2 class="text-center couleur1 my-5">Un prix juste garanti !</h2>
    <div class="col-xl-12 text-center">
        <span>
            <small>Obtenez votre devis en quelques clics. Il vous suffit d’indiquer l’immatriculation du véhicule, le service souhaité, votre localisation et
                nous vous fournirons un devis juste avant de planifier votre service. Si votre voiture a besoin de services supplémentaires,
                nous vous fourniront une liste détaillée de ce dont vous avez besoin. Vous pouvez toujours décider d’ajouter ou de refuser ces services supplémentaires.
            </small>
        </span>
    </div>
    <div class="row mt-5">
        <div class="col-xl-12 text-center">
            <h5 class="couleur1">Exemple de facture pour une vidange de Peugeot 208</h5>
        </div>
        <div class="col-xl-12 d-flex justify-content-center mt-5">
            <img src="img/peugeot_208.jpg" alt="" class="image_resp">
        </div>
    </div>
    <div class="row my-4">
        <div class="w-100">
            <div class="border border-dark my-2 mt-5 col-xl-12 p-0">
                <div class="d-flex">
                    <div class="col-lg-10 col-8 text-center py-4 separation">
                        <span class="couleur1 font-weight-bold">Forfait Vidange du liquide de frein</span>
                    </div>
                    <div class="col-lg-2 col-4 text-center py-4 m-auto">
                        <span class="couleur1 font-weight-bold">Peugeot 208</span>
                    </div>
                </div>
            </div>
            <div class="border border-dark mt-1 mb-3 p-0 m-0">
                <div class="col-xl-12 d-flex p-0">
                    <div class="col-lg-10 col-8 m-0 p-2 separation1">
                        <span>- Heure de main d'oeuvre</span>
                    </div>
                    <div class="col-lg-2 col-4 text-center my-2">
                        <span>30.00</span>
                    </div>
                </div>
                <div class="col-xl-12 d-flex p-0">
                    <div class="col-lg-10 col-8 m-0 p-2 separation1">
                        <span>- Prix du matériel</span>
                    </div>
                    <div class="col-lg-2 col-4 text-center my-2">
                        <span>45.00</span>
                    </div>
                </div>
                <div class="col-xl-12 d-flex p-0">
                    <div class="col-lg-10 col-8 m-0 p-2 separation1">
                        <span>- Commission</span>
                    </div>
                    <div class="col-lg-2 col-4 text-center my-2">
                        <span>15.00</span>
                    </div>
                </div>
                <hr class="bg-secondary p-0 m-0">
                <div class="col-xl-12 d-flex p-0 pl-1">
                    <div class="col-xl-9 my-2 m-0 p-0">
                        <span class="col-lg-10 col-8 m-0 p-2 font-weight-bold">TOTAL</span>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-lg-2 col-4 my-2 text-center">
                        <span class="font-weight-bold couleur1">90.00 €</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 text-center">
            <span class="couleur1">
                <small>Votre prix total serait de <span class="font-weight-bold">90€</span><br>
                    Alors profitez-en vite !
                </small>
            </span>
        </div>
        <div class="col-xl-12 text-center my-5">
            <a href="contact.php"><button class="btn btn-outline-success font-weight-bold">Je veux un devis !</button></a>
        </div>
    </div>
</section>

<?php
require_once 'partial/footer.php'
?>