<?php
$ablakcim = array(
    'cim' => 'Vasúttörténeti Alapítvány',
);
$sql_adatok = array(
    "host" => "localhost",
    "felhasznalonev" => "root",
    "jelszo" => "",
    "dbname" => "vasut"
);
$fejlec = array(
    'kepforras' => 'vasuttorteneti_alapitvany.png',
    'kepalt' => 'Vasúttörténeti Alapítvány',
    'cim' => 'Vasúttörténeti Alapítvány',
    'motto' => 'Akit a mozdony füstje megcsapott'
);

$lablec = array(
    'copyright' => 'Copyright&nbsp;&copy;&nbsp;'.date("Y").' ',
    'ceg' => 'Vasúttörténeti Alapítvány'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
    'eloelet' => array('fajl' => 'eloelet', 'szoveg' => 'Az alapítvány előélet', 'menun' => array(1,1)),
    'buszkesegek' => array('fajl' => 'buszke', 'szoveg' => 'Amire büszkék vagyunk', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'feltolt' => array('fajl' => 'feltolt', 'szoveg' => 'Feltöltés', 'menun' => array(0, 0)),
    'uzen' => array('fajl' => 'uzen', 'szoveg' => 'Üzen', 'menun' => array(0,0)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0,0)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
