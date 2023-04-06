<?php

$user = 'root';
$pwd = '';
try {
    $dbh = new PDO('sqlite:example.db');
} catch (PDOException $e) {
    echo $e->getCode() . ' ' . $e->getMessage();
}