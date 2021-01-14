<?php include '../model/appointments.php' ?>
<?php include '../model/patients.php' ?>
<?php include '../control/modifier-rdv-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Modifier-Rendez-vous</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Modifier le rendez vous N°<?= $rdvId ?></h2>
            <p class="invalid"><?= isset($methodMessage) ? $methodMessage : '' ?></p>
            <form class="row mt-5" action="modifier-rdv.php" method="POST">
                <div class="form-group col-3 mx-auto">
                    <label for="date">Date du RDV</label>
                    <input type="date" name="date" id="date" class="form-control" value="<?= isset($_POST['date']) ? $_POST['date'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['date']) ? $formErrors['date'] : '' ?></p>
                </div>
                <div class="form-group col-3 mx-auto">
                    <label for="hour">Heure du RDV</label>
                    <input type="time" name="hour" id="hour" class="form-control" value="<?= isset($_POST['hour']) ? $_POST['hour'] : '' ?>">
                    <p class="invalid"><?= isset($formErrors['hour']) ? $formErrors['hour'] : '' ?></p>
                </div>
                <div class="form-group col-12 mx-auto">
                    <label for="patient">Patient</label>
                    <select name="patient" id="patient">
                        <option value="" selected>----------</option>
                    <?php
                        foreach($patientList as $patient){
                            ?><option value="<?= $patient->id ?>"><?= $patient->lastname?> <?= $patient->firstname ?></option><?php
                        }?>
                    </select>
                </div>
                <button type="submit" name="modify" value="<?= $rdvId ?>" class="btn btn-primary mt-5 mx-auto">Modifier le rendez-vous</button>
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