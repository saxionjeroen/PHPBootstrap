<?php
//maakt het nu volledig dynamisch 13022018 JG

$url = $_SERVER['SCRIPT_FILENAME'];
$expurl = explode('\\',$url);
$baseurl = explode('/',$_SERVER['SCRIPT_NAME']);
$base = $baseurl[count($baseurl)-1];
$dash = 0;
if($expurl < 2 || $baseurl < 2) {
    $url = $_SERVER['SCRIPT_FILENAME'];
    $expurl = explode('//', $url);
    $baseurl = explode('/', $_SERVER['SCRIPT_NAME']);
    $base = $baseurl[count($baseurl) - 1];
    $dash = 0;
}

foreach ($expurl as $ele){
    if ($base != $ele && 'get' != $ele && 'post' != $ele ){
        $dash++;
    }
}

define('SCRIPTGEN', $dash );
//12072017 mocht er $_SESSION gaan gebruikt worden dan word die automatisch aangemaatk als deze pagina word aangeroepen
if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

//13092017 JG : berekent hoeveel stappen er terug gedaan moeten worder om bij log.txt te komen
$exitdirectoryString = '';
$fileGen = substr_count($_SERVER['SCRIPT_FILENAME'], '\\');
$directoryGenerationLog = SCRIPTGEN;
$differents = $fileGen - $directoryGenerationLog;
for ($i = 0; $i < $differents; $i++) {
    $exitdirectoryString .= '../';
}

define('DASHES', $exitdirectoryString);

//11072017 JG : de directory waarin de phpclasses in staan
$dir = $exitdirectoryString . "./HTML";

//11072017 JG : haalt alle files die erin staan op als string
$files = scandir($dir);

//11072017 JG : filtert de php bestanden eruit en required's ze zodat je alleen deze pagina hoeft te laden en alles word geladen
foreach ($files as $filename) {
    if (strpos($filename, ".php") > 0) {//11072017 JG : filter
        require_once($exitdirectoryString . 'HTML/' . $filename);
    }
}

