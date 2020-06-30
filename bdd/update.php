<?php

require_once('bdd/connect-Db.php');

if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM xxx_users WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    if (isset($_POST['name']) and !empty($_POST['name']) and $_POST['name'] != $user['name']) {
        $newname = htmlspecialchars(($_POST['name']));
        $update = $bdd->prepare("UPDATE xxx_users SET name = ? WHERE id = ?");
        $update->execute(array($newname, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    if (isset($_POST['surname']) and !empty($_POST['surname']) and $_POST['surname'] != $user['surname']) {
        $newsurname = htmlspecialchars(($_POST['surname']));
        $update = $bdd->prepare("UPDATE xxx_users SET surname = ? WHERE id = ?");
        $update->execute(array($newsurname, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    if (isset($_POST['email']) and !empty($_POST['email']) and $_POST['email'] != $user['email']) {
        $newemail = htmlspecialchars(($_POST['email']));
        $update = $bdd->prepare("UPDATE xxx_users SET email = ? WHERE id = ?");
        $update->execute(array($newemail, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    if (isset($_POST['address']) and !empty($_POST['address']) and $_POST['address'] != $user['address']) {
        $newaddress = htmlspecialchars(($_POST['address']));
        $update = $bdd->prepare("UPDATE xxx_users SET address = ? WHERE id = ?");
        $update->execute(array($newaddress, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    if (isset($_POST['city']) and !empty($_POST['city']) and $_POST['city'] != $user['city']) {
        $newcity = htmlspecialchars(($_POST['city']));
        $update = $bdd->prepare("UPDATE xxx_users SET city = ? WHERE id = ?");
        $update->execute(array($newcity, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    if (isset($_POST['cp']) and !empty($_POST['cp']) and $_POST['cp'] != $user['cp']) {
        $newcp = htmlspecialchars(($_POST['cp']));
        $update = $bdd->prepare("UPDATE xxx_users SET cp = ? WHERE id = ?");
        $update->execute(array($newcp, $_SESSION['id']));
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
} else {
    echo "erreur";
}
