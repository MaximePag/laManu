<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index Hopital LaManu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="circle col-md-10 offset-md-1">
                <h1>HOPITAL LAMANU</h1>
                <h2>Tableau de bord</h2>
                <h3 class="mb-3 mt-5">Modifier les patients</h3>
                <ul>
                    <li><a href="view/liste-patient.php"><button type="button" class="btn btn-outline-info">Liste des patients</button></a></li>
                    <li><a href="view/ajout-patient.php"><button type="button" class="btn btn-outline-info">Ajouter un patient</button></a></li>
                    <li><a href="view/profil-patient.php"><button type="button" class="btn btn-outline-info">Profil du patient</button></a></li>
                </ul>
                <div class="strip"></div>
                <h3 class="mb-3 mt-2">Modifier les rendez-vous</h3>
                <ul>
                    <li><a href="view/liste-rdv.php"><button type="button" class="btn btn-outline-info">Liste des rendez-vous</button></a></li>
                    <li><a href="view/ajout-rdv.php"><button type="button" class="btn btn-outline-info">Ajouter un rendez-vous</button></a></li>
                    <li><button type="button" class="btn btn-outline-info">Description du rendez-vous </button></li>
                </ul>   
            </div>
        </div>
        <div class="row">
            <div class="col-1 offset-5"><img id="goku" class="left-50" src="../assets/img/goku.png" /></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>