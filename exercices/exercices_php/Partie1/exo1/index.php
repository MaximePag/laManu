<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>partie9 le calendrier</title>
</head>
<body>
    <a href="calendar.php"></a>
        <form method="post" action="calendar.php">
            <fieldset>
                <legend>Choisissez votre calendrier</legend>
                    <p><label for="months">Choix du mois</label>
                        <select name="months" id="months">
                            <?php
                                $month = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
                                foreach($month as $allMonth){ ?>
                                    <option value="$allMonth"><?= $allMonth; ?></option>
                            <?php         
                                }
                            ?>
                        </select>
                    </p>
                    <p><label for="years">Choix de l'année</label>
                        <select name="years" id="years">
                            <?php
                                for ($year = 2030; $year >= 1969; $year--){ 
                                    if ($year <= 1969){
                                        ?><option value=" "> </option><?php
                                    }
                                    else{
                                        ?><option value="$year"><?= $year; ?></option><?php
                                    }
                                    
                            
                                }
                            ?>
                        </select>
                    </p>
                        <input type="submit" name="envoyer" />
            </fieldset>
        </form>
</body>
</html>

<!--

<VirtualHost *:80>
    ServerAdmin webmaster@projetPHP
    ServerName www.projetPHP
    ServerAlias projetPHP
    DocumentRoot /home/maxime/Documents/www/ProjetGroupe/Projet PHP/
    <Directory /home/maxime/Documents/www/ProjetGroupe/Projet PHP/>
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog /var/log/apache2/projetPHP-error.log
    LogLevel warn
    CustomLog  /var/log/apache2/projetPHP-access.log combined
    ServerSignature Off
</VirtualHost>

127.0.0.1       projetPHP

-->