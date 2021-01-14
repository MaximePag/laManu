<?php
function childByActivity($activity, $child){
    $activities = array();
    $activities['1'] = '5';
    $activities['2'] = '3';
    $activities['3'] = '10';
    $activities['4'] = '4';
    $activities['5'] = '8';
    $activities['6'] = '16';
    $activities['7'] = '3';
    $activities['8'] = '4';
    $activities['9'] = '0';
    return array_search($child, $activities[$activity]);
}
function childByActivity2($activity, $child){
    $activity1 = 5;
    $activity2 = 3;
    $activity3 = 10;
    $activity4 = 4;
    $activity5 = 8;
    $activity6 = 16;
    $activity7 = 3;
    $activity8 = 4;
    $activity9 = 0;
    if ($activity == 1){
        if ($activity1 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 2){
        if ($activity2 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 3){
        if ($activity3 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 4){
        if ($activity4 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 5){
        if ($activity5 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 6){
        if ($activity6 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 7){
        if ($activity7 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 8){
        if ($activity8 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
    if ($activity == 9){
        if ($activity9 == $child){
            return $child;
        }
        else{
            return 'false';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Php</title>
</head>
<body>
    <p><?= childByActivity(1, 5) ?></p>   
    <p><?= childByActivity2(6, 16) ?></p>
    <p>J'ai testé deux fonctions différentes la première j'ai pas compris pourquoi ça marchais pas la deuxième c'est du gros bricolage.</p> 
</body>
</html>