<footer class="container-fluid p-0">
    <div class="col-lg-12 text-center mt-2 mb-4">
        <a class="bordure couleur text-decoration-none" href="#">A propos</a>
        <a class="bordure couleur text-decoration-none" href="services.php">Nos services</a>
        <a class="bordure couleur text-decoration-none" href="">Mentions Légales</a>
        <a class="bordure couleur text-decoration-none" href="opinions.php">Avis clients</a>
        <a class="bord couleur text-decoration-none" href="contact.php">Contact</a>
    </div>
    <div class="col-lg-12 border d-lg-flex p-0">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-12 text-center p-0 m-0"><i class="couleur far fa-copyright pr-2"></i><span>GOMES Valériano | Tous droits réservés</span></div>
        <div class="col-lg-3 delete text-right p-0"><span><small>Site réalisé par DELANNOY Jonathan</span></small></div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/main.js"></script>
<?php
if (isset($_GET['repairs'])) {
    if ($_GET['repairs'] == 'repairs') { ?>
        <script>
            $('.all').removeClass('active'),
                $('.repairs').addClass('active')
            $('#elements section').addClass('filter'),
                $('#elements .repairs').removeClass('filter')
        </script>
<?php
    } else {
        '';
    }
} else {
    '';
}
?>

<?php
if (isset($_GET['carrosseries'])) {
    if ($_GET['carrosseries'] == 'carrosseries') { ?>
        <script>
            $('.all').removeClass('active'),
                $('.carrosseries').addClass('active')
            $('#elements section').addClass('filter'),
                $('#elements .carrosseries').removeClass('filter')
        </script>
<?php
    } else {
        '';
    }
} else {
    '';
}
?>

<?php
if (isset($_GET['servicing'])) {
    if ($_GET['servicing'] == 'servicing') { ?>
        <script>
            $('.all').removeClass('active'),
                $('.servicing').addClass('active')
            $('#elements section').addClass('filter'),
                $('#elements .servicing').removeClass('filter')
        </script>
<?php
    } else {
        '';
    }
} else {
    '';
}
?>
</body>

</html>