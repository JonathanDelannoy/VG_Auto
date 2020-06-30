<?php
require_once('bdd/update.php');
require_once('partial/header.php')
?>

<section class="container">
    <?php
    if ($_GET['id'] == $_SESSION['id']) {
    ?>
        <h2 class="d-flex justify-content-center my-5 couleur1 h1">Mise à jour de votre profil</h2>
        <form method="POST" action="">
            <div class="col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Nom</label>
                <input name="name" class="col-6 my-auto text-center" value="<?php echo $user['name'] ?>">
            </div>
            <div class="col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Prénom</label>
                <input name="surname" class="col-6 my-auto text-center" value="<?php echo $user['surname'] ?>">
            </div>
            <div class="col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Email</label>
                <input name="email" class="col-6 my-auto text-center" value="<?php echo $user['email'] ?>">
            </div>
            <div class="col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Adresse</label>
                <input name="address" class="col-6 my-auto text-center" value="<?php echo $user['address'] ?>">
            </div>
            <div class="col-12 col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Ville</label>
                <input name="city" class="col-6 my-auto text-center" value="<?php echo $user['city'] ?>">
            </div>
            <div class="col-12 col-12 d-flex justify-content-center my-2">
                <label class="col-6 my-auto" data-error="wrong" data-success="right">Code Postal</label>
                <input name="cp" class="col-6 my-auto text-center" value="<?php echo $user['cp'] ?>">
            </div>
            <div class="col-xl-12 text-center my-5">
                <a href="update_profil.php?id=<?php echo $_SESSION['id'] ?>"><button type="submit" class="btn btn-outline-dark font-weight-bold w-50">Modifier</button></a>
            </div>
        </form>
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