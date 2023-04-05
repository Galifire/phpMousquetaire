<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="./form.php" method="POST">

        <label for="immatriculation">Immatriculation</label>
        <input type="text" id="immatriculation" name="immatriculation"><br>

        <label for="type">Type</label>
        <input type="list" id="types" name="types" list="typesDL" placeholder="Choisissez un type de location">
        <datalist id="typesDL">
            <option value="Touristique">
            <option value="Travail">
            <option value="Dépannage">
        </datalist><br>

        <label>Énergie</label><br>
        <input type="radio" name="energie" id="energie" value="Essence"><label for="energie">Essence</label><br>
        <input type="radio" name="energie" id="energie" value="Diesel"><label for="energie">Diesel</label><br>
        <input type="radio" name="energie" id="energie" value="GPL"><label for="energie">GPL</label><br>
        <input type="radio" name="energie" id="energie" value="Bioéthanol"><label for="energie">Bioéthanol</label><br>

        <label for="kilometrage">Kilométrage</label>
        <input id="kilometrage" name="kilometrage" type="text"><br>

        <label for="nbjours" type="number">Nombre de jours</label>
        <input id="nbjours" name="kilometrage" type="number"><br>

        <label for="assurance">Assurance</label>
        <input id="assurance" name="assurance" type="checkbox"><br>

        <input id="reset" name="reset" type="reset">
        <input id="submit" name="submit" type="submit" valueonclick="checkValues">
    </form>

<?php
function checkValues() {
    $immatriculation = $_POST['immatriculation'];
    $type = $_POST['type'];
    $energie = $_POST['energie'];
    $kilometrage = $_POST['kilometrage'];
    $nbjours = $_POST['nbjours'];
    $assurance = $_POST['assurance'];

    if (empty($immatriculation)) {
        echo "L'immatriculation est obligatoire";
    } else if (empty($type)) {
        echo "Le type est obligatoire";
    } else if (empty($energie)) {
        echo "L'énergie est obligatoire";
    } else if (empty($kilometrage)) {
        echo "Le kilométrage est obligatoire";
    } else if (empty($nbjours)) {
        echo "Le nombre de jours est obligatoire";
    } else if (empty($assurance)) {
        echo "L'assurance est obligatoire";
    } else {
        echo "Tout est bon";
    }
}

?>
</body>
</html>