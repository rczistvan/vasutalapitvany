<?php
include("./logical/email_kuldes.php");

if (isset($uzenet)) {
    echo $uzenet;
}
?>
<br><br>
Feladó: <?=$_POST['nev'] ?><br>
Üzenet: <?=$_POST['uzenet'] ?>
<br><br>
<a href="?oldal=kapcsolat">Vissza a kapcsolatokra!</a>
