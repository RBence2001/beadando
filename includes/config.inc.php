<?php

$ablakcim = array (
    'cim' => 'Kecskeméti vadaspark',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Kecskeméti vadaspark'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' =>'Címlap','menun' => 'Kezdőlap'),
    'allataink' => array('fajl' => 'allataink', 'szoveg'=>'Állataink','menun' => ' Állataink'),
    'galeria' => array('fajl' => 'galeria', 'szoveg' =>'Galéria','menun'=> ' Galéria'),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg'=>'Kapcsolat','menun' => array(1,1)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' =>'Üzenet','menun'=> ' Üzenet'),
    'elkuld' => array('fajl' => 'elkuld', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg'=>'Belépés','menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' =>'Kilépés','menun'=> array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'feltolt' => array('fajl' => 'feltolt', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' =>'','menun'=> array(0,0)),

);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA1 = './Képek/galleria/';
$TIPUSOK = array ('.jpg', '.png', '.jpeg');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 1920*1080;

?>