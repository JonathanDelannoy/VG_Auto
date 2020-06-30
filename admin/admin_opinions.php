<?php
require_once('controllers.php');
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

<body class="container">
    <table class="table table-striped">
        <tr class="row col-12">
            <th class="col-1 text-center">ID</th>
            <th class="col-1 text-center">Note</th>
            <th class="col-2 text-center">Nom</th>
            <th class="col-2 text-center">Prénom</th>
            <th class="col-2 text-center">Message</th>
            <th class="col-4 text-center">Action</th>
        </tr>
        <?php foreach ($opinions as $o) : ?>
            <tr class="row col-12">
                <td class="col-1 text-center"><?= $o->id ?></td>
                <td class="col-1 text-center"><?= $o->star ?></td>
                <td class="col-2 text-center"><?= $o->opinion_name ?></td>
                <td class="col-2 text-center"><?= $o->opinion_surname ?></td>
                <td class="col-2 text-center"><?= $o->msg ?></td>
                <td class="col-4 d-flex justify-content-around">
                    <a href="?act=delete&id=<?= $o->id ?>" class="btn btn-danger">
                        <i class="fa fa-trash fa-2x"></i>
                    </a>
                    <a href="?act=editer&id=<?= $o->id ?>" class="btn btn-warning">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <form action="" method="GET" class="col-12 mt-5 bg-dark py-4">
        <div class="d-flex justify-content-around">
            <input type="hidden" name="act" value="<?= $form_act ?>">
            <input type="hidden" name="id" value="<?= $opinion->id ?>">
            <input class="col-2 mx-2" type="text" name="star" value="<?= $opinion->star ?>">
            <input class="col-2 mx-2" type="text" name="opinion_name" value="<?= $opinion->opinion_name ?>">
            <input class="col-2 mx-2" type="text" name="opinion_surname" value="<?= $opinion->opinion_surname ?>">
            <input class="col-2 mx-2" type="text" name="msg" value="<?= $opinion->msg ?>">
            <button class="col-2 mx-2 btn btn-success">
                <?php if ($opinion->id == -1) : ?>Ajouter
            <?php else : ?>
                Modifier
            <?php endif; ?>
            </button>
        </div>
    </form>
</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/main.js"></script>

</html>