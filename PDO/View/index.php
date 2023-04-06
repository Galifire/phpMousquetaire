<?php
  require_once('../Controller/Controller.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $controller = new Controller();

    function printFn() : void {
        $chars = $controller->getAllCharacters();

        foreach($chars as $c) {
            echo 'Id du Personnage : ' . $c->getId() . '<br>';
            echo 'Nom du Personnage : ' . $c->getName() . '<br>';
            echo 'Force du Personnage : ' . $c->getStrength() . '<br>';
            echo 'Agilité du Personnage : ' . $c->getAgility() . '<br>';
            echo 'Intelligence du Personnage : ' . $c->getIntelligence() . '<br>';
            echo 'Tribu du Personnage : ' . $c->getTribe() . '<br>';
            echo 'Classe du Personnage : ' . $c->getClass() . '<br>';
            echo '<br>';
        }
    }
    

    function months() : void {
        $year = [
            'Janvier' => 'JAN',
            'Février' => 'FEB',
            'Mars' => 'MAR',
            'Avril' => 'APR',
            'Mai' => 'MAY',
            'Juin' => 'JUN',
            'Juillet' => 'JUL',
            'Août' => 'AUG',
            'Septembre' => 'SEP',
            'Octobre' => 'OCT',
            'Novembre' => 'NOV',
            'Décembre' => 'DEC'
        ];
    
        foreach($year as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    
        echo '<br>';
    
        $year += array('Partembre' => 'PAR');
    
        foreach($year as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    }

    //echo printFn();
    //echo months();

    ?>
</body>
</html>
