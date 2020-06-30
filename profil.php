<?php
require_once('bdd/back.php');

if (isset($_GET['id']) and $_GET['id'] > 0) {
    $getId = intval($_GET['id']);
    $requser = $bdd->prepare("SELECT * FROM xxx_users WHERE id= $getId");
    $requser->execute(array($getId));
    $userinfo = $requser->fetch();

    require_once('partial/header.php')
?>

    <section class="container">
        <?php
        if ($_GET['id'] == $_SESSION['id']) {
        ?>
            <h2 class="d-flex justify-content-center my-5 couleur1 h1">Compte de <?php echo $userinfo['surname'] ?></h2>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Nom</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['name'] ?></span>
                </div>
                <div class="col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Prénom</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['surname'] ?></span>
                </div>
                <div class="col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Email</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['email'] ?></span>
                </div>
                <div class="col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Adresse</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['address'] ?></span>
                </div>
                <div class="col-12 col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Ville</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['city'] ?></span>
                </div>
                <div class="col-12 col-12 d-flex justify-content-center my-2">
                    <label class="col-6 my-auto" data-error="wrong" data-success="right">Code Postal</label>
                    <span class="col-6 my-auto text-center"><?php echo $userinfo['cp'] ?></span>
                </div>
                <div class="col-xl-12 text-center my-5">
                <a href="update_profil.php?id=<?php echo $_SESSION['id'] ?>"><button type="submit" class="btn btn-outline-dark font-weight-bold w-50">Modifier mon compte</button></a>
                </div>
            </div>
        <?php
        } else {
            echo '<div class="row">
            <span class="col-12 text-center text-danger h1 my-5">ACCES INTERDIT !</span>
            <p class="col-12 text-center text-danger h2 my-4">L\'accès à ce profil vous est interdit si vous êtes le propriétaire de ce compte veuillez vous connecter.</p>
            <p class="col-12 text-center text-danger h3 my-5">Si vous vous êtes déjà connecter à votre compte et que vous avez ce message d\'erreur veuillez contacter le service client via le formulaire de contact à votre disposition sur le site.</p>
            <a href="contact.php" class="col-12 text-center text-danger h3 mb-5"><button type="submit" class="btn btn-outline-dark font-weight-bold w-50">Contact</button><a>
            </div>';
        }
        ?>
    </section>


    <?php
    require_once 'partial/footer.php'
    ?>

<?php
} else {
}
?>