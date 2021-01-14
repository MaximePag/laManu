<?php include '../model/appointments.php' ?>
<?php include '../control/description-rdv-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Description-Rendez-vous</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Description du rendez-vous N°<?= $rdvDetails->id ?></h2>
            <form action="modifier-rdv.php" method="POST">
                <h3>Rendez-vous le : <?= $rdvDetails->dateHourFR ?></h3>
                <h3>Nom : <?= $rdvDetails->lastname ?></h3>
                <h3>Prénom : <?= $rdvDetails->firstname ?></h3>
                <h3>Date de naissance : <?= $rdvDetails->birthDateFR ?></h3>
                <h3>Téléphone : <?= $rdvDetails->phone ?></h3>
                <h3>Mail : <?= $rdvDetails->mail ?></h3>
                <button type="submit" name="modify" value="<?= $rdvDetails->id ?>" class="btn btn-primary mt-5">Modifier le rendez-vous</button>
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