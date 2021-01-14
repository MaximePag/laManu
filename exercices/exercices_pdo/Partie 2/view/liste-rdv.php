<?php include '../model/appointments.php' ?>
<?php include '../control/liste-rdv-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hopital LaManu - Liste-Rendez-Vous</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
    <div class="row">
        <div class="square col-md-8 offset-md-2">
            <h1>HOPITAL LAMANU</h1>
            <h2>Liste des rendez-vous</h2>
            <p><?= var_dump($rdvList) ?></p>
            <p><?= var_dump($rdvInfo) ?></p>
            <table class="mx-auto mb-5">
                <tr>
                    <th>Numéro du RDV</th>
                    <th>Date & Heure</th>
                    <th>Patient</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach($rdvList as $rdv){
                    ?><form action="description-rdv.php" method="POST"><tr>
                        <td><?= $rdv->appId ?></td>
                        <td><?= $rdv->dateHourFR ?></td>
                        <td><?= $rdv->lastname . ' ' . $rdv->firstname ?></td>
                        <td><button type="submit" name="desc" class="btn btn-primary" value="<?= $rdv->idPatients ?>">Description du rendez-vous</button></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Supprimer</button></td>
                    </tr></form><?php
                }
                ?>
            </table>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer ce rendez-vous?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Rendez-vous N°<?= $rdv->appId ?></h6>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="ajout-rdv.php"><button type="submit" name="submit" class="btn btn-primary">Ajouter un rendez-vous</button></a>
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