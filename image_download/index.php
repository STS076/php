<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- POPPINS FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:wght@300;500;600&family=Open+Sans:wght@400;600;800&family=Poppins:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/style.css">

    <title>Document</title>
</head>

<body class="background">

    <h1 class="text-center p-5 ">Télécharger vos images</h1>

    <div class="row m-0 pt-5 px-0 justify-content-center">
        <div class="col-lg-8 col-11 charger border border-dark shadow-sm rounded p-5 mb-5 mx-0 text-center">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="file">Fichier <i class="ms-1 bi bi-cloud-arrow-up"></i></label>
                <div class="d-flex justify-content-center p-3">
                    <img id="imgPreview" id="fileToUpload">
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit" class="btn border border-dark bouton p-1 m-1">Enregistrer</button>
            </form>

            <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $id = uniqid(); 
                $newName = $id . '.webp';
                $target_dir = "img/";
                $target_file = $target_dir . basename($newName);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                

                // Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check == true) {
            ?>
                        <p class="p-2">Ce fichier est une image <?= $check["mime"] ?>.</p>
                    <?php
                        $uploadOk = 1;
                    } else { ?>

                        <p class="p-2">Ce fichier n'est pas une image.</p>
                    <?php
                        $uploadOk = 0;
                    }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    ?>
                    <p class="p-2">Ce fichier existe déjà.</p>
                <?php
                    $uploadOk = 0;
                };

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 5000000) { ?>

                    <p class="p-2">Votre fichier est trop large.</p>
                <?php
                    $uploadOk = 0;
                };

                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"  && $imageFileType != "webp"
                ) { ?>
                    <p class="p-2">Vous pouvez seulement télécharger des fichiers JPG, JPEG, PNG & GIF.</p>
                <?php
                    $uploadOk = 0;
                };

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {  ?>
                    <p class="p-2">Votre fichier n'a pas été téléchargé.</p>

                    <!-- if everything is ok, try to upload file -->
                    <?php } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { ?>

                        <p class="p-2">Le fichier <?= htmlspecialchars($_FILES["fileToUpload"]["name"]) ?> a bien été téléchargé dans vos documents.</p>
                    <?php  } else { ?>

                        <p class="p-2">Désolé, il y a eu une erreur dans le téléchargement de votre image.</p>
            <?php }
                }
            }
            ?>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="./assets/script.js"></script>

</body>

</html>