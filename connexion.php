<?php
require_once 'partial/header.php';

$faux = '';
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if (!empty($email) and !empty($password)) {
        $sql = "SELECT * FROM xxx_users WHERE email=:email";
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue('email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->rowCount(array($email, $password));
        if ($result == 1) {
            $userinfo = $stmt->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['password'] = $userinfo['password'];
            header('Location: index.php?id=' . $_SESSION['id']);
        }
        else $faux = '<div class="col-12 text-center text-danger mb-5">Votre compte est introuvable</div>';
    }
    else $faux = '<div class="col-12 text-center text-danger mb-5">Tous les champs doivent être complétés</div>';
}
?>


<section class="my-5 container p-0">
    <h2 class="text-center couleur1 my-5 pt-5 pb-4 h1">Se connecter</h2>
    <form action="" method="POST">
        <div class="col-12 d-sm-flex justify-content-center my-5">
            <label class="col-sm-6 col-12 p-0 mb-2 resp" for="email">Email</label>
            <input class="col-sm-6 col-12" type="email" name="email">
        </div>
        <div class="col-12 d-sm-flex justify-content-center my-5">
            <label class="col-sm-6 col-12 p-0 mb-2 resp" for="password">Mot de Passe</label>
            <input class="col-sm-6 col-12" type="password" name="password">
        </div>
        <div class="col-xl-12 text-center my-5">
            <button type="submit" name="login" class="btn btn-outline-success font-weight-bold w-50">Valider</button>
        </div>
        <?php
        echo $faux;
        ?>
        <div class="col-12 p-0 d-flex justify-content-center">
            <p class="text-center">Vous n'avez pas de compte ?<br>
                Inscrivez-vous ! Cela se passe par <a class="text-decoration-none text-success" href="inscription.php">ici</a> .
            </p>
        </div>
    </form>
</section>

<?php
require_once 'partial/footer.php'
?>