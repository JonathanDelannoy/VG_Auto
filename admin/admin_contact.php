<?php
require_once("controllers.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body class="container-fluid">
    <section class="row">
        <h1 class="col-12 text-center my-5">Gestion des Messages</h1>
        <table class="table table-striped">
            <tr class="d-flex justify-content-around">
                <th class="col-1 w-100 h-100 text-center">ID</th>
                <th class="col-2 w-100 h-100 text-center">Prestation</th>
                <th class="col-1 w-100 h-100 text-center">Immatriculation</th>
                <th class="col-4 w-100 h-100 text-center">Message</th>
                <th class="col-1 w-100 h-100 text-center">Civilité</th>
                <th class="col-1 w-100 h-100 text-center">Téléphone</th>
                <th class="col-2 w-100 h-100 text-center">Action</th>
            </tr>
            <?php foreach ($contacts as $c) : ?>
                <tr class="d-flex justify-content-around">
                    <td class="col-1 w-100 h-100 text-center"><?= $c->id ?></td>
                    <td class="col-2 w-100 h-100 text-center"><?= $c->presta ?></td>
                    <td class="col-1 w-100 h-100 text-center"><?= $c->immat ?></td>
                    <td class="col-4 w-100 h-100 text-center"><?= $c->message ?></td>
                    <td class="col-1 w-100 h-100 text-center"><?= $c->civ ?></td>
                    <td class="col-1 w-100 h-100 text-center"><?= $c->tel ?></td>
                    <td class="col-1 w-100 h-100 text-center"><a href="?action=del&id=<?= $c->id ?>" class="btn btn-danger w-100 h-100">
                            <i class="fa fa-trash fa-2x w-100 h-100"></i>
                        </a>
                    </td>
                    <td class="col-1 w-100 h-100 text-center"><a href="?action=edit&id=<?= $c->id ?>" class="btn btn-warning w-100 h-100">
                            <i class="fa fa-edit fa-2x w-100 h-100"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
        <form action="" method="GET" class="col-12 mt-5 bg-dark py-4">
            <div class="d-flex justify-content-around">
                <input type="hidden" name="action" value="<?= $form_action ?>">
                <input type="hidden" name="id" value="<?= $contact->id ?>">
                <select class="col-2 mx-2" name="presta" value="<?= $contact->presta ?>">
                    <option>Choisissez votre prestation</option>
                    <option value="Demande de devis">Demande de devis</option>
                    <option value="Demande d'expertise">Demande d'expertise</option>
                    <option value="Demande de RDV">Demande de RDV</option>
                    <option value="Demande d'aide">Demande d'aide</option>
                    <option value="Demande de réclamation">Demande de réclamation</option>
                    <option value="Autre">Autre</option>
                </select>
                <input class="col-1 mx-2" type="text" name="immat" value="<?= $contact->immat ?>">
                <input class="col-3 mx-2" type="text" name="message" value="<?= $contact->message ?>">
                <select class="col-1 mx-2" name="civ" value="<?= $contact->civ ?>">
                    <option></option>
                    <option>Monsieur</option>
                    <option>Madame</option>
                    <option>Autre</option>
                </select>
                <input class="col-2 mx-2" type="text" id="tel" name="tel" value="<?= $contact->tel ?>">
                <button class="col-2 mx-2 btn btn-success">
                    <?php if($contact->id ==-1) : ?>Ajouter
                        <?php else : ?>
                        Modifier
                    <?php endif; ?>
                </button>
            </div>
        </form>
    </section>
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/main.js"></script>

</html>