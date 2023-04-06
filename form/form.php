<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Formulaire</title>
</head>

<body>
    <form action="./form.php" method="POST">
        <fieldset>
            <legend>Location de Véhicule</legend>

        <label for="immatriculation">Immatriculation</label>
        <input type="text" name="immatriculation" value=<?php
        if (!empty($_POST["immatriculation"])) {
            var_dump($_POST["immatriculation"]);
        }
        ?>>
        <br>

        <label for="type">Type</label>
        <select name="types">
            <option name="types" value="Choisir">Choisir</option>
            <option name="types" value="Touristique" <?php 
            if (!empty($_POST['types']) && $_POST['types'] == 'Touristique') {
                echo 'selected';
            } ?>>Touristique</option>

            <option name="types" value="Travail" <?php 
            if (!empty($_POST['types']) && $_POST['types'] == 'Travail') {
                echo 'selected';
            } ?>>Travail</option>

            <option name="types" value="Dépannage" <?php 
            if (!empty($_POST['types']) && $_POST['types'] == 'Dépannage') {
                echo 'selected';
            } ?>>Dépannage</option>
        </select><br>


        <label>Énergie</label><br>
        <input type="radio" name="model[energie]" value="Essence" <?php
        if (isset($_POST['model[energie]']) && $_POST['model[energie]'] == "Essence") {
            echo 'checked';
        }
        ;
        ?>>
        <label for="energie">Essence</label><br>

        <input type="radio" name="model[energie]" value="Diesel" <?php
        if (isset($_POST['model[energie]']) && $_POST['model[energie]'] == "Diesel") {
            echo 'checked';
        }
        ;
        ?>>
        <label for="energie">Diesel</label><br>

        <input type="radio" name="model[energie]" value="GPL" <?php
        if (isset($_POST['model[energie]']) && $_POST['model[energie]'] == "GPL") {
            echo 'checked';
        }
        ;
        ?>>
        <label for="energie">GPL</label><br>

        <input type="radio" name="model[energie]" value="Bioéthanol" <?php
        if (isset($_POST['model[energie]']) && $_POST['model[energie]'] == "Bioéthanol") {
            echo 'checked';
        }
        ;
        ?>>
        <label for="energie">Bioéthanol</label><br>

        <label for="kilometrage">Kilométrage</label>
        <input id="kilometrage" name="kilometrage" type="text" value=<?php
        if (!empty($_POST["kilometrage"])) {
            echo $_POST["kilometrage"];
        }
        ?>><br>

        <label for="nbjours" type="number">Nombre de jours</label>
        <input id="nbjours" name="nbjours" type="number" value=<?php
        if (!empty($_POST["nbjours"])) {
            echo $_POST["nbjours"];
        }
        ?>><br>

        <label for="assurance">Assurance</label>
        <input id="assurance" name="assurance" type="checkbox" <?php
        if (isset($_POST['assurance']))
            echo "checked";
        ?>><br>

        <input id="reset" name="reset" value="Réinitialiser" type="reset">
        <input id="submit" name="submit" value="Valider" type="submit">
        </fieldset>
    </form>

    <?php
    var_dump($_POST);
    /*
    // Required field names
    $required = array('immatriculation', 'types', 'energie', 'kilometrage', 'nbjours', 'assurance');
    // Loop over field names, make sure each one exists and is not empty
    if ($_POST['types'] == 'Choisir') {
    $post['types'] = null;
    }
    $error = false;
    foreach ($required as $field) {
    if (empty($_POST[$field])) {
    switch ($field) {
    case 'immatriculation':
    echo "L'immatriculation est obligatoire.<br>";
    break;
    case 'types':
    echo "Le type est obligatoire.<br>";
    break;
    case 'energie':
    echo "L'énergie est obligatoire.<br>";
    break;
    case 'kilometrage':
    echo "Le kilométrage est obligatoire.<br>";
    break;
    case 'nbjours':
    echo "Le nombre de jours est obligatoire.<br>";
    break;
    case 'assurance':
    $_POST['assurance'] = false;
    break;
    }
    }
    }*/
    ?>
</body>

</html>