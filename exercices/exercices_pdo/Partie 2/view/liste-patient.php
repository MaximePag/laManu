<?php include '../model/patients.php' ?>
<?php include '../control/liste-patient-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Liste-Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Liste des patients</h2>
            <form method="GET" action="liste-patient.php" class="form-inline justify-content-center">
                <input id="search" name="search" type="text" placeholder="rechercher un patient" />
                <button type="submit" class="btn btn-sm btn-primary" name="sendSearch">Rechercher</button>
            </form><?php
            if($resultsNumber == 0){ ?>
                    <p class="text-center m-5"><?= $searchMessage ?></p><?php
            } else { ?>
                <p class="invalid"><?= isset($addPatientMessage) ? $addPatientMessage : '' ?></p>
                <table class="mx-auto mb-5">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>PROFIL</th>
                    </tr>
                    <?php
                    foreach($patientList as $patient){
                        ?><form action="profil-patient.php" method="POST"><tr>
                            <td><?= $patient->id ?></td>
                            <td><?= $patient->lastname ?></td>
                            <td><?= $patient->firstname ?></td>
                            <td><button type="submit" name="submit" class="btn btn-info" value="<?= $patient->id ?>">Profil du patient</button></td>
                        </tr></form><?php
                    }
                    ?>
                </table><?php
            } ?>
            <a href="ajout-patient.php"><button type="submit" name="submit" class="btn btn-primary">Ajouter un patient</button></a>
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