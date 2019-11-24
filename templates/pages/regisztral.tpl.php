<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció</title>
    <meta charset="utf-8">
</head>
<body>
<?php include("logical/regisztal.php"); ?>
<?php if(isset($uzenet)) { ?>
    <h1><?= $uzenet ?></h1>
    <a href="../../index.php?oldal=belepes">
    <?php if($ujra) { ?>
        Próbálja újra!
    <?php } else { ?>
        Tovább a bejelentkezéshez!
    <?php } ?></a>
<?php } ?>
</body>
</html>