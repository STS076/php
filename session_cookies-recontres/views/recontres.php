<?php require_once "../data/fakeProfile.php"; 
$style = "main";
?>

<?php require_once "../controller/rencontres-controller.php" ?>

<?php include 'elements/header.php' ?>

<body>

    <?php include 'elements/navbar.php' ?>

    <main class="main py-5">

        <div class="toussaint py-5">
            <div class="row text-center promo py-5">
                <p class="fw-bold fs-5">Rencontrez tous les célibataires de votre promo !!</p>
            </div>
        </div>

        <!-- affichage cards -->

        <?php if ($display == 'cards') {
        ?>

            <div class="toussaint my-3 py-5">
                <div class="row justify-content-evenly">

                    <?php
                    foreach ($profile as $key => $value) {

                        // on va trier en fonction du genre 
                        if ($search != 'lesDeux' && $value["gender"] != $search) {
                            continue;
                            // si contraire de ce qu'on recherche, alors passe le chemin
                        }

                    ?>
                        <div class="card col-lg-3 col-11 p-0 carte m-3">
                            <div class="text-center">
                                <img src="/public/avatars/<?= $value["picture"] ?>.jpg" class="rounded-circle image card-img-top pt-2" alt="photo <?= $value["name"] ?>">
                            </div>
                            <div class="card-body">
                                <p class="fs-5 card-title text-center fw-bold"><?= $value["name"] ?></p>
                                <p class="card-text text-center"><?= $value["gender"] ?></p>
                                <div class="text-center">
                                    <button type="button" class="btn bouton" data-bs-toggle="modal" data-bs-target="#<?= $value["picture"] ?>">
                                        Plus d'infos
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="<?= $value["picture"] ?>" tabindex="-1" aria-labelledby="<?= $value["picture"] ?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header top">
                                        <div class="text-center">
                                            <p class="modal-title fw-bold text-center fs-4" id="exampleModalLabel"><?= $value["name"] ?></p>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Adresse : <?= $value["address"] ?> <?= $value["postalZip"] ?></p>
                                        <p>Email : <?= $value["email"] ?></p>
                                        <p>Téléphone : <?= $value["phone"] ?></p>
                                        <p>Genre : <?= $value["gender"] ?></p>
                                    </div>
                                    <div class="modal-footer top">
                                        <button type="button" class="btn bouton" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                    ?>

                </div>
            </div>

        <?php } else { ?>
            <!-- affichage liste -->

            <div class="toussaint my-3 py-5">
                <div class="row text-center">
                    <table class="table table-striped table-hover">
                        <thead class="carte py-2">
                            <tr>
                                <th class="m-0 py-3" scope="col">Photo</th>
                                <th class="m-0 py-3" scope="col">Nom</th>
                                <th class="m-0 py-3" scope="col">Plus d'info</th>
                            </tr>
                        </thead>
                        <tbody class="carte ">
                            <?php
                            foreach ($profile as $key => $value) {
                            ?>
                                <tr>
                                    <td> <img src="/public/avatars/<?= $value["picture"] ?>.jpg" class="picture rounded-circle " alt="photo <?= $value["name"] ?>"></td>
                                    <td class="fw-bold "><?= $value["name"] ?></td>
                                    <td><button type="button" class="btn bouton" data-bs-toggle="modal" data-bs-target="#<?= $value["picture"] ?>">
                                            Plus d'infos
                                        </button></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php } ?>

    </main>

    <footer class="background ">
        <div class="text-center p-4 text-white">
            © Sophie
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>