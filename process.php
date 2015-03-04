<?php
if(isset($_GET["select"]))
{
	$select = $_GET["select"];
}
	
if(isset($_GET["nom"]))
{
	$nom = $_GET["nom"];
	$varForCsv = $nom." --- ".$select."\r\n";
	
	$fichierUser = 'file/invitation.txt';
	
	if(!$fp = fopen($fichierUser, 'a')){
		exit;
	} else {
		fwrite($fp, $varForCsv);
		fclose($fp);
	}
}

