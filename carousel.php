<section class="row my-5">
    <h2 class=" col-12 couleur1 text-center mb-5"><strong>Les avis de nos clients</strong></h2>
    <div id="demo" class="carousel slide w-100 h-100" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row d-md-flex justify-content-around mx-auto">
                    <div class="col-md-4 col-12 border carousel_height">
                        <?php
                        $id1 = 1;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id1, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id2 = 2;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id2, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id3 = 3;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id3, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel_css">
                <div class="d-md-flex justify-content-around mx-auto row col-12">
                    <div class="col-md-4 col-12 border carousel_height">
                        <?php
                        $id4 = 4;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id4, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id5 = 5;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id5, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id6 = 6;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id6, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel_css">
                <div class="d-md-flex justify-content-around mx-auto row col-12">
                    <div class="col-md-4 col-12 border carousel_height">
                        <?php
                        $id7 = 7;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id7, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id8 = 8;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id8, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 border carousel_height carousel_resp">
                        <?php
                        $id9 = 9;
                        $sql = "SELECT * FROM xxx_opinions WHERE id=:id";
                        $stmt = $bdd->prepare($sql);
                        $stmt->bindValue('id', $id9, PDO::PARAM_INT);
                        $stmt->execute();
                        $carouselinfo = $stmt->fetch();
                        ?>
                        <div class="col-12 text-decoration-none text-center my-5 p-0">
                            <?php
                            for ($x = 1; $x <= $carouselinfo['star']; $x++) {
                                echo '<i class="fa fa-star text-warning fa-2x"></i>';
                            }
                            ?>
                        </div>
                        <div class="col-12 text-center my-5"><?= $carouselinfo['msg'] ?></div>
                        <div class="col-12 text-center my-4 carousel_bottom lead h4 font-weight-bold">
                            <span><?= $carouselinfo['opinion_name'] ?></span>
                            <span><?= $carouselinfo['opinion_surname'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev"></a>
        <a class="carousel-control-next" href="#demo" data-slide="next"></a>
    </div>
</section>
