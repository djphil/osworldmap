<?php
include_once("config.php");
include_once("mysqli.php");

// Creates XML string and XML document using the DOM 
$dom = new DomDocument('1.0', "UTF-8"); 
$map = $dom->appendChild($dom->createElement('Map')); 
$DbLink = new DB;
$DbLink->query("SELECT uuid, regionName, serverPort, serverIP, serverURI, locX, locY, sizeX, sizeY FROM ".C_TB_REGIONS);

while(list($UUID, $regionName, $serverPort, $serverIP, $serverURI, $locX, $locY, $dbsizeX, $dbsizeY) = $DbLink->next_record())
{
   	$grid = $map->appendChild($dom->createElement('Grid')); 

   	$uuid = $grid->appendChild($dom->createElement('Uuid')); 
   	$uuid->appendChild($dom->createTextNode($UUID));

   	$serveport = $grid->appendChild($dom->createElement('ServerPort')); 
   	$serveport->appendChild($dom->createTextNode($serverPort)); 

   	$serveip = $grid->appendChild($dom->createElement('ServerIP')); 
   	$serveip->appendChild($dom->createTextNode($serverIP)); 

   	$serveuri = $grid->appendChild($dom->createElement('ServerURI')); 
   	$serveuri->appendChild($dom->createTextNode($serverURI));

   	$region = $grid->appendChild($dom->createElement('RegionName')); 
   	$region->appendChild($dom->createTextNode($regionName)); 

   	$locationX = $grid->appendChild($dom->createElement('LocX')); 
   	$locationX->appendChild($dom->createTextNode($locX/256)); 

   	$locationY = $grid->appendChild($dom->createElement('LocY')); 
   	$locationY->appendChild($dom->createTextNode($locY/256)); 

    $sizeX = $grid->appendChild($dom->createElement('SizeX')); 
    $sizeX->appendChild($dom->createTextNode($dbsizeX)); 

    $sizeY = $grid->appendChild($dom->createElement('SizeY')); 
    $sizeY->appendChild($dom->createTextNode($dbsizeY));
}

$dom->formatOutput = true;
$output = $dom->saveXML();
header("Content-type: text/xml");
echo $output;
?>
