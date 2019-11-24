<?php
if(isset($_POST['nev']) && isset($_POST['uzenet'])) {
    try {
        $dbh = new PDO('mysql:host='. $sql_adatok["host"] . ';dbname=' . $sql_adatok["dbname"], $sql_adatok["felhasznalonev"], $sql_adatok["jelszo"],
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlInsert = "insert into uzenetek(id, felado, uzenet)
                          values(0, :felado, :uzenet)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(':felado' => $_POST['nev'], ':uzenet' => $_POST['uzenet']));
        if($count = $stmt->rowCount()) {
            $uzenet = "Üzenet sikeresen elküldve!";
        }
        else {
            $uzenet = "Nem tudtuk elküldeni az üzenetet!";
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
    }
}
else {
    $uzenet = "Nincs minden beállítva!";
    header("Location: .");
}
?>