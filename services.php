<?php
require_once 'partial/header.php';
?>

<section class="container-fluid mb-5 p-0 m-0 w-100">
    <div class="services-container">
        <img src="img/services_back.jpg" alt="" class="w-100">
    </div>
    <div class="col-12 text-center py-4 title">
        <h3 class="text-light">Réparations, Entretiens, Carrosseries</h3>
    </div>
    <div class="row col-12 border border-dark px-5 m-0 mb-5 bg-dark">
        <div id="filtres" class="my-3 col-12 d-md-flex justify-content-around">
            <button class="all col-md-3 col-12 btn btn-outline-success m-1 active" data-filter="all">Tout</button>
            <button class="carrosseries col-md-3 col-12 btn btn-outline-success m-1" data-filter="carrosseries">Carrosseries</button>
            <button class="repairs col-md-3 col-12 btn btn-outline-success m-1" data-filter="repairs">Réparations Automobiles</button>
            <button class="servicing col-md-3 col-12 btn btn-outline-success m-1" data-filter="servicing">Entretiens</button>
        </div>
    </div>
    <div id="elements" class="row col-md-12 d-sm-flex justify-content-between p-0 m-0">
        <section class="repairs col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Alternateur</h5>
            <p class="col-12 text-center my-4 p-0">Votre alternateur ne recharge plus correctement votre batterie ?</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
        <section class="carrosseries col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Calandre</h5>
            <p class="col-12 text-center my-4 p-0">La calandre est un élément essentiellement de beauté mais aussi de protection du radiateur contre les projections.</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
        <section class="carrosseries col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Pare choc Arrière</h5>
            <p class="col-12 text-center my-4 p-0">Remplacement du Pare choc Arrière.</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
        <section class="servicing col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Forfait Vidange du liquide de frein</h5>
            <p class="col-12 text-center my-4 p-0">Le remplacement du liquide de frein avec la purge du circuit hydraulique.</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
        <section class="repairs col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Kit de distribution</h5>
            <p class="col-12 text-center my-4 p-0">Cette opération comprend la courroie de distribution avec les galets tendeurs et enrouleur, la pompe à eau, la courroie d'accessoire et le liquide de refroidissement.</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
        <section class="repairs col-md-5 col-12 text-center border border-secondary div-services my-5 mx-md-2">
            <h5 class="col-12 text-center couleur1 my-2">Démarreur</h5>
            <p class="col-12 text-center my-4 p-0">Prenez rendez-vous avec votre mécanicien pour effectuer le remplacement de votre démarreur !</p>
            <div class="col-12 position">
                <div class="text-center">
                    <a href="detail_services.php" class="text-decoration-none couleur">
                        <i class="fas fa-angle-double-right fa-1x"> En savoir plus</i>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section>

<?php
require_once 'partial/footer.php'
?>