<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=bastide", "root", "");
} catch (Exception $e) {
    die("ERROR : " . $e->getMessage());
}

