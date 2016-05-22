<?php header( 'Access-Control-Allow-Origin: *'); ?>
{
	"location": {
		"country": "Netherlands",
		"city": "Amsterdam"
	},
	"portal": {
		"url": "http://data.amsterdam.nl/dataset/activiteiten",
		"title": "Activiteiten",
		"description": "<p>Alle activiteiten in Amsterdam en omgeving zoals deze door Amsterdam Marketing worden beheerd. Dit bestand wordt dagelijks vernieuwd en bevat steeds de activiteiten vanaf vandaag. Titels en toelichtingen in Nederlands en Engels.</p>",
		"license": "",
		"licenseURL": "",
		"attribution": "Amsterdam Marketing",
		"author": "info@iamsterdam.com",
		"created": "2013-05-16",
		"updated": "2016-01-04"
	},
	"front": {
		"textTop": "Heute schon was vor?",
		"textBottom": "Angebote stehen bereit",
<?php
	$url = 'http://open.datapunt.amsterdam.nl/Activiteiten.json';
	$json = file_get_contents($url);
	$data = json_decode($json, TRUE);
	$count = count($data);

	echo '"value": "'.$count.'",';
?>
		"unit": "",
		"changePerDay": "",
		"format": "int",
		"background": "img/family.svg",
		"color": "#ffffff"
	},
	"back": {
		"text": "Amsterdam-Marketing aktualisiert diese Liste täglich mit den neusten Angeboten.",
		"color": "#000000",
		"cssClass": ""
	}
}