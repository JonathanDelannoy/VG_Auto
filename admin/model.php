<?php
require_once('bdd/connect-Db.php');

function addContact($presta, $immat, $message, $civ, $tel)
{
    global $bdd;
    $sql = "INSERT INTO xxx_contact VALUES(null, ?, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $presta, PDO::PARAM_STR);
    $stmt->bindValue(2, $immat, PDO::PARAM_STR);
    $stmt->bindValue(3, $message, PDO::PARAM_STR);
    $stmt->bindValue(4, $civ, PDO::PARAM_STR);
    $stmt->bindValue(5, $tel, PDO::PARAM_STR);
    return $stmt->execute();
}

function deleteContact($id)
{
    global $bdd;
    $sql = "DELETE FROM xxx_contact WHERE id=?";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
}

function updateContact($id, $presta, $immat, $message, $civ, $tel)
{
    global $bdd;
    $sql = "UPDATE xxx_contact SET presta=:presta, immat=:immat, message=:message, civ=:civ, tel=:tel WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue('id', $id, PDO::PARAM_INT);
    $stmt->bindValue('presta', $presta, PDO::PARAM_STR);
    $stmt->bindValue('immat', $immat, PDO::PARAM_STR);
    $stmt->bindValue('message', $message, PDO::PARAM_STR);
    $stmt->bindValue('civ', $civ, PDO::PARAM_STR);
    $stmt->bindValue('tel', $tel, PDO::PARAM_STR);
    return $stmt->execute();
}

function getContact($id)
{
    global $bdd;
    $sql = "SELECT * FROM xxx_contact WHERE id=?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function getAllContact()
{
    global $bdd;
    $sql = "SELECT * FROM xxx_contact";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}





function addOpinion($star, $opinion_name, $opinion_surname, $msg)
{
    global $bdd;
    $sql = "INSERT INTO xxx_opinions VALUES(null, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $star, PDO::PARAM_INT);
    $stmt->bindValue(2, $opinion_name, PDO::PARAM_STR);
    $stmt->bindValue(3, $opinion_surname, PDO::PARAM_STR);
    $stmt->bindValue(4, $msg, PDO::PARAM_STR);
    return $stmt->execute();
}

function deleteOpinion($id)
{
    global $bdd;
    $sql = "DELETE FROM xxx_opinions WHERE id=?";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    return $stmt->execute();
}

function updateOpinion($id, $star, $opinion_name, $opinion_surname, $msg)
{
    global $bdd;
    $sql = "UPDATE xxx_opinions SET star=:star, opinion_name=:opinion_name, opinion_surname=:opinion_surname, msg=:msg WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue('id', $id, PDO::PARAM_INT);
    $stmt->bindValue('star', $star, PDO::PARAM_INT);
    $stmt->bindValue('opinion_name', $opinion_name, PDO::PARAM_STR);
    $stmt->bindValue('opinion_surname', $opinion_surname, PDO::PARAM_STR);
    $stmt->bindValue('msg', $msg, PDO::PARAM_STR);
    return $stmt->execute();
}

function getOpinion($id)
{
    global $bdd;
    $sql = "SELECT * FROM xxx_opinions WHERE id=?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function getAllOpinion()
{
    global $bdd;
    $sql = "SELECT * FROM xxx_opinions";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}




function addUsers($name, $surname, $email, $password, $address, $city, $cp)
{
    global $bdd;
    $sql = "INSERT INTO xxx_users VALUES (null, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $surname, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $password, PDO::PARAM_STR);
    $stmt->bindValue(5, $address, PDO::PARAM_STR);
    $stmt->bindValue(6, $city, PDO::PARAM_STR);
    $stmt->bindValue(7, $cp, PDO::PARAM_INT);
    return $stmt->execute();
}
