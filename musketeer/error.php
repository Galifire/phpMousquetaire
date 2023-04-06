<?php

if ($_GET['test'] == 'test') { ?> <!-- Il faut écrire ?test=test dans l'URL pour avoir le résultat affiché --><?php
    echo 'Test !!!'; ?> <!-- Il manquait un point virgule --> <?php
}
