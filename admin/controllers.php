<?php
require_once("model.php");

$action = isset($_GET['action']) ? $_GET['action'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
$effect = isset($_GET['effect']) ? $_GET['effect'] : '';

$contact = (object) ['id' => -1, 'presta' => '', 'immat' => '', 'message' => '', 'civ' => '', 'tel' => ''];
$opinion = (object) ['id' => -1, 'star' => '', 'opinion_name' => '', 'opinion_surname' => '', 'msg' => ''];

$form_action = 'add';
$form_act = 'ajouter';
$form_effect = 'append';

switch ($action) {
    case 'add':
        $presta = $_GET['presta'];
        $immat = $_GET['immat'];
        $message = $_GET['message'];
        $civ = $_GET['civ'];
        $tel = $_GET['tel'];
        addContact($presta, $immat, $message, $civ, $tel);
        break;
    case 'del':
        $id = $_GET['id'];
        deleteContact($id);
        break;
    case 'edit':
        $id = $_GET['id'];
        $contact = getContact($id);
        $form_action = 'update';
        break;
    case 'update':
        $id = $_GET['id'];
        $presta = $_GET['presta'];
        $immat = $_GET['immat'];
        $message = $_GET['message'];
        $civ = $_GET['civ'];
        $tel = $_GET['tel'];
        updateContact($id, $presta, $immat, $message, $civ, $tel);
        break;
}
$contacts = getAllContact();

switch ($act) {
    case 'ajouter':
        $star = $_GET['star'];
        $opinion_name = $_GET['opinion_name'];
        $opinion_surname = $_GET['opinion_surname'];
        $msg = $_GET['msg'];
        addOpinion($star, $opinion_name, $opinion_surname, $msg);
        break;
    case 'delete':
        $id = $_GET['id'];
        deleteOpinion($id);
        break;
    case 'editer':
        $id = $_GET['id'];
        $opinion = getOpinion($id);
        $form_act = 'maj';
        break;
    case 'maj':
        $id = $_GET['id'];
        $star = $_GET['star'];
        $opinion_name = $_GET['opinion_name'];
        $opinion_surname = $_GET['opinion_surname'];
        $msg = $_GET['msg'];
        updateOpinion($id, $star, $opinion_name, $opinion_surname, $msg);
        break;
}
$opinions = getAllOpinion();


switch ($effect) {
    case 'append':
        $name = htmlspecialchars($_GET['name']);
        $surname = htmlspecialchars($_GET['surname']);
        $email = htmlspecialchars($_GET['email']);
        $password = password_hash($_GET['password'], PASSWORD_BCRYPT);
        $address = htmlspecialchars($_GET['address']);
        $city = htmlspecialchars($_GET['city']);
        $cp = htmlspecialchars($_GET['cp']);
        if (!empty($_GET['name']) and !empty($_GET['surname']) and !empty($_GET['email']) and !empty($_GET['password']) and !empty($_GET['address']) and !empty($_GET['city']) and !empty($_GET['cp'])) {
            addUsers($name, $surname, $email, $password, $address, $city, $cp);
            header('Location: connexion.php');
        } else {
            $bad = '<span class="col-12 text-center text-danger mb-5">Tous les champs doivent être remplis</span>';
        }
        break;
}