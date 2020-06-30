<?php
require_once 'partial/header.php';
?>

<section class="w-100 back">
    <section class="container-fluid h-100">
        <div class="row">
            <div class="text-xl-left text-center border rounded rdv bg-light mx-2">
                <h4 class="text-center col-xl-12 my-4 couleur1"><strong>Rendez-vous immédiat !</strong></h4>
                <p class="text-center col-xl-12"><small>De quoi avez-vous besoin ?</small></p>
                <form action="services.php" method="GET" class="col-xl-12 d-flex justify-content-around p-0 my-2 m-resp">
                    <div class="col-xl-4 w-100 p-0 m-0 text-center">
                        <button name="repairs" value="repairs" class="btn btn-success btn_width btn_height p-0">
                            <i class="col-12 fas fa-tools fa-3x mb-xs-2 p-0"></i>
                            <div class="col-12 text-center p-0 span-delete mt-2">
                                <span>Réparation Auto</span>
                            </div>
                        </button>
                    </div>
                    <div class="col-xl-4 w-100 p-0 m-0 text-center">
                        <button name="servicing" value="servicing" class="btn btn-success btn_width btn_height p-0">
                            <i class="col-12 fas fa-filter fa-3x mb-xs-2 p-0"></i>
                            <div class="col-12 text-center p-0 span-delete mt-2">
                                <span>Entretien et Vidange</span>
                            </div>
                        </button>
                    </div>
                    <div class="col-xl-4 w-100 p-0 m-0 text-center">
                        <button name="carrosseries" value="carrosseries" class="btn btn-success btn_width btn_height p-0">
                            <i class="col-12 fas fa-car fa-3x mb-xs-2 p-0"></i>
                            <div class="col-12 text-center p-0 span-delete mt-2">
                                <span>Prestation Carrosserie</span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
<section class="container-fluid">
    <section class="row bg-light mt-2">
        <div class="col-md-12">
            <h1 class="text-center col-12 my-5 couleur1"><strong>Nos Avantages</strong></h1>
            <div class="d-md-flex justify-content-around col-md-12 mb-3">
                <div class="col-md-3 col-12">
                    <div class="text-center mb-2">
                        <i class="fas fa-euro-sign fa-5x mb-2 couleur1"></i>
                    </div>
                    <p class="text-center mb-4 mt-4 lead">Prix juste et Devis gratuit</p>
                </div>
                <div class="col-md-3 col-12">
                    <div class="text-center mb-2">
                        <i class="far fa-clock fa-5x mb-2 couleur1"></i>
                    </div>
                    <p class="text-center mb-4 mt-4 lead">Prise en charge rapide</p>
                </div>
                <div class="col-md-3 col-12">
                    <div class="text-center mb-2">
                        <i class="fas fa-screwdriver fa-5x mb-2 couleur1"></i>
                    </div>
                    <p class="text-center mb-4 mt-4 lead">Mécanicien fiable, qualifié et équipé</p>
                </div>
                <div class="col-md-3 col-12">
                    <div class="text-center mb-2">
                        <i class="far fa-calendar-alt fa-5x mb-2 couleur1"></i>
                    </div>
                    <p class="text-center mb-4 mt-4 lead">Rendez-vous du Lundi au Vendredi</p>
                </div>
            </div>
        </div>
    </section>
    <section class="row back1 mt-2">
        <h1 class="text-center col-lg-12 text-light my-5"><strong>Réservez votre mécanicien de confiance en 2min</strong></h1>
        <div class="d-lg-flex justify-content-around col-lg-12 p-0">
            <div class="col-lg-4 col-12">
                <div class="text-center d-flex justify-content-center">
                    <div class="border rounded-circle circle mb-4"><span class="text-light"><strong>1</strong></span></div>
                </div>
                <div class="col-lg-12 text-center">
                    <i class="fas fa-wrench fa-5x text-light mb-4"></i>
                </div>
                <h2 class="col-lg-12 text-center text-light mb-4 px-0">Choisissez la révision</h2>
                <p class="lead text-center text-light">Sélectionnez votre marque de véhicule, dites-nous de quoi vous avez besoin et nous trouverons ce qu’il vous faut.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="text-center d-flex justify-content-center">
                    <div class="border rounded-circle circle mb-4"><span class="text-light"><strong>2</strong></span></div>
                </div>
                <div class="col-lg-12 text-center">
                    <i class="fas fa-calendar-alt fa-5x text-light mb-4"></i>
                </div>
                <h2 class="col-lg-12 text-center text-light mb-4 px-0">Fixez la date et le lieu</h2>
                <p class="lead text-center text-light">Votre mécanicien prévoit un rendez-vous au garage le jour et l’heure qui vous arrange.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <div class="text-center d-flex justify-content-center">
                    <div class="border rounded-circle circle mb-4"><span class="text-light"><strong>3</strong></span></div>
                </div>
                <div class="col-lg-12 text-center">
                    <i class="far fa-thumbs-up fa-5x text-light mb-4"></i>
                </div>
                <h2 class="text-center text-light mb-4 px-0">Votre voiture est prête</h2>
                <p class="lead text-center text-light">Ça y est ! Vous n’avez pas perdu du temps au garage,
                    votre mécano s’est occupé de tout pendant que vous faisiez votre vie sans rien changer à votre journée.
                </p>
            </div>
        </div>
    </section>
    <section class="row back2">
        <div class="col-xl-12 d-flex">
            <div class="col-sm-7 p-0"></div>
            <div class="col-sm-5 col-12 p-0">
                <h1 class="text-center couleur2 mt-5 mb-5"><strong>Besoin d'une réparation sur votre carrosserie ?</strong></h1>
                <p class="text-center couleur2 mb-5 lead">Nous mettons nos compétences et nos expériences à votre service quand vous le désirez !</p>
                <div class=" d-flex justify-content-center">
                    <a href="contact.php"><button class="btn border text-light mb-5 lead">Prendre un RDV</button></a>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once 'carousel.php';
    ?>
</section>

<?php
require_once 'partial/footer.php'
?>