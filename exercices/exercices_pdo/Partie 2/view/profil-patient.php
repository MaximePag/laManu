<?php include '../model/patients.php' ?>
<?php include '../model/appointments.php' ?>
<?php include '../control/profil-patient-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Profil-Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Profil du patient</h2>
            <p class="invalid"><?= isset($addPatientMessage) ? $addPatientMessage : '' ?></p>
            <form action="modifier-patient.php" method="POST">
                <h3>Nom : <?= $patientInfo->lastname ?></h3>
                <h3>Prénom : <?= $patientInfo->firstname ?></h3>
                <h3>Date de naissance : <?= $patientInfo->birthdateFR ?></h3>
                <h3>Téléphone : <?= $patientInfo->phone ?></h3>
                <h3>Mail : <?= $patientInfo->mail ?></h3>
                <button type="submit" name="modify" value="<?= $patientInfo->id ?>" href="modifier-patient.php" class="btn btn-primary mt-5">Modifier le patient</button>
            </form>
            <table class="mx-auto">
            <?php
            foreach($rdvList as $rdv){
                ?><form action="description-rdv.php" method="POST"><tr>
                    <td><?= $rdv->appId ?></td>
                    <td><?= $rdv->dateHourFR ?></td>
                    <td><?= $rdv->lastname . ' ' . $rdv->firstname ?></td>
                    <td><button type="submit" name="desc" class="btn btn-primary" value="<?= $rdv->idPatients ?>">Description du rendez-vous</button></td>
                </tr></form><?php
            }
            ?>
            </table>
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