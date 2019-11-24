<?php
try {
    $dbh = new PDO('mysql:host='. $sql_adatok["host"] .';dbname='. $sql_adatok["dbname"] , $sql_adatok["felhasznalonev"], $sql_adatok["jelszo"],
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlSelect = "select id,felado,uzenet from uzenetek";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    $errormessage = "Hiba: ".$e->getMessage();
}
