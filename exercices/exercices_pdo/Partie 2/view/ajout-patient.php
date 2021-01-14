<?php include '../model/patients.php' ?>
<?php include '../control/ajout-patient-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Ajout-Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Ajout d'un patient</h2>
            <p class="invalid"><?= isset($addPatientMessage) ? $addPatientMessage : '' ?></p>
            <form class="mt-5" action="ajout-patient.php" method="POST">
                <div class="form-group">
                    <label for="lastName">Nom</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Entrez le nom du patient" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['lastName']) ? $formErrors['lastName'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="firstName">Prénom</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Entrez le prénom du patient" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['firstName']) ? $formErrors['firstName'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="birthDate">Date de naissance</label>
                    <input type="date" name="birthDate" id="birthDate" class="form-control" placeholder="Entrez la date de naissance du patient" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['birthDate']) ? $formErrors['birthDate'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Entrez le numéro de téléphone du patient" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['phone']) ? $formErrors['phone'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="birthDate">Adresse Mail</label>
                    <input type="mail" name="mail" id="mail" class="form-control" placeholder="Entrez l'e-mail du patient" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Ajouter le patient</button>
            </form>
        </div>
    </div>
    <a href="../index.php"><button type="button" class="btn btn-warning mt-5">Retour Index</button></a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>