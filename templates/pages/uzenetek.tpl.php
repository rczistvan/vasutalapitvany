<?php
include ("./logical/uzenet_lekeres.php");

if (isset($uzenet)) {
    echo $uzenet;
}
?>
<table>
    <tr><td>Sorszám</td><td>Feladó</td><td>Üzenet</td></tr>
    <?php
    if (isset($rows)) {
        foreach ($rows as $row) {
            $id = $row['id'];
            $name = $row['felado'];
            $uzenet = $row['uzenet'];
            echo "<tr><td>$id</td><td>$name</td><td>$uzenet</td></tr>";
        }
    }
    ?>
</table>
<?php
if (isset($errormessage)) {
    echo $errormessage;
}
?>
<a href="?oldal=kapcsolat">Vissza a kapcsolatokra!</a>
