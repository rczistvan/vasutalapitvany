<?php
if(isset($_POST["feltoltes"])) {
    $darab = 2;
    if ($handle = opendir('./gallery')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != ".." && $entry != "kep1.jpg") {
                $darab++;
            }
        }
        closedir($handle);
    }

    $name = $_FILES["fajl"]["name"];

    $split = explode(".", $name);
    $file = "./gallery/kep".$darab.".".end($split);

    if(getimagesize($_FILES["fajl"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["fajl"]["tmp_name"], $file)) {
            $uzenet = "Kép feltöltve!";
        } else {
            $uzenet = "Belső hiba történt, nem tudtuk feltölteni a képet!";
        }
    } else {
        $uzenet = "Ez egy álkép!";
    }
}
?>
<a href="../index.php?oldal=galeria">Vissza a galériába!</a>
