<?php
  // includo la classa Persona
	include('classi/Persona.php');
	// creo l'oggetto istanzio la classe
	
	// oggetto alessandro
/*	$alessandro = new Persona();
	// restituisce se è un oggetto
	echo is_object($alessandro);
	$alessandro->nome = "Alessandro";
	$alessandro->cognome ="Rossi";
	$alessandro->eta = 45;
	echo "$alessandro->nome <br/>";
*/
// oggetto luca	
	$luca = new Persona();
	//$luca->nome = "Luca"; variabile privata
	$luca->cognome = "Verdi";
	$luca->eta = 40;
	//echo "$luca->nome <br/>";
	echo "$luca->cognome <br/>";
	echo "$luca->eta <br/>";
	echo Persona::ALTEZZA;
	
?>
