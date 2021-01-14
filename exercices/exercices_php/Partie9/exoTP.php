<?php
        $jd = gregoriantojd($_GET['month'],01,$_GET['year']);
        $beforeMonth = ($_GET['month'] - 1);
        $afterMonth = ($_GET['month'] + 1);
        $beforeYear = $_GET['year'];
        $afterYear = $_GET['year'];
        $week = 0;
        if ($afterMonth == 13){
            $afterMonth = 1;
            $afterYear++;
        }
        if ($beforeMonth == 0){
            $beforeMonth = 12;
            $beforeYear--;
        }
        $daysCount = cal_days_in_month(0, $_GET['month'], $_GET['year']);
        $beforeDaysCount = cal_days_in_month(0, $beforeMonth, $beforeYear);
        $nextDaysCount = cal_days_in_month(0, $afterMonth, $afterYear);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PHP Partie9 Exo TP</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div>
        <form>
        <h1>Calendrier</h1>
        <h2>Mois & Année</h2>
        <select name="month" id="month">
                <option value="<?= isset($_GET['month']) ? $_GET['month'] : ' ' ?>"><?= $_GET['month'] ?></option>
                <option value="01">Janvier</option>
                <option value="02">Février</option>
                <option value="03">Mars</option>
                <option value="04">Avril</option>
                <option value="05">Mai</option>
                <option value="06">Juin</option>
                <option value="07">Juillet</option>
                <option value="08">Août</option>
                <option value="09">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select>
            <select name="year" id="year">
                <option value="<?= isset($_GET['year']) ? $_GET['year'] : ' ' ?>"><?= $_GET['year'] ?></option>
                <option value="2025">2025</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
            </select>
        <h2>Envoyer</h2>
        <button type="submit" formmethod="get" formaction="exoTP.php">Envoyer</button>
        <button><a href="index.php">Retour Index</a></button>
        </form>
    </div>
    <div>
    <table>
        <th colspan="7"><?= $_GET['month'] . ' ' . $_GET['year']?></th>
        <tr>
            <td class="daysName">Lundi</td>
            <td class="daysName">Mardi</td>
            <td class="daysName">Mercredi</td>
            <td class="daysName">Jeudi</td>
            <td class="daysName">Vendredi</td>
            <td class="daysName">Samedi</td>
            <td class="daysName">Dimanche</td>
        </tr>
        <?php
              switch (jddayofweek($jd,0))
              { 
                  case 1:
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 2:
                    for ($days = ($beforeDaysCount); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 3:
                    for ($days = ($beforeDaysCount - 1); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 4:
                    for ($days = ($beforeDaysCount - 2); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 5:
                    for ($days = ($beforeDaysCount - 3); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 6:
                    for ($days = ($beforeDaysCount - 4); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  case 0:
                    for ($days = ($beforeDaysCount - 5); $days <= $beforeDaysCount; $days++){
                        ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                    }
                    for ($days = 1; $days <= $daysCount; $days++){
                        if ($week < 7){
                            ?><td><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                            ?></tr><tr><td><?= $days ?></td><?php
                            $week = 1;
                        }
                    }
                    for ($days = 1; $days <= $nextDaysCount; $days++){
                        if ($week < 7){
                            ?><td class="outMonthDay"><?= $days; $week++ ?></td><?php
                        }
                        elseif ($week >= 7){
                        break;
                        }  
                    }
                  break;
                  default;
                      echo 'Erreur';
                  }?>
    </table>
    </div>
</body>

</html>