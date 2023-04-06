<?php

$user = 'root';
$pwd = '123+aze';
try {
    $dbh = new PDO('sqlite:example.db');
} catch (PDOException $e) {
    echo $e->getCode() . ' ' . $e->getMessage();
}