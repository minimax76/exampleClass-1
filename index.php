<?php
  // includo la classa Persona
	include('classi/Tavolo.php');
	include('classi/TavoloAllungabile.php');
	// creo l'oggetto istanzio la classe
// oggetto Tavolo Scavolini
	$tavoloscavolini = new Tavolo();
	//$luca->nome = "Luca"; variabile privata
	$tavoloscavolini->essenza ="Noce";
	$tavoloscavolini->marca ="Scavolini";
	$tavoloscavolini->lunghezza = 1.50;
	$tavoloscavolini->larghezza = 1.00;
	$tavoloscavolini->altezza = 0.80;
	//stampa l'oggetto tavolo scavolini
	printf("Il tavolo %s in %s e lunghezza=%f larghezza=%f altezza=%f  <br/>", $tavoloscavolini->marca, $tavoloscavolini->essenza, $tavoloscavolini->lunghezza, $tavoloscavolini->larghezza, $tavoloscavolini->altezza);
	
	// oggetto Tavolo Berloni
	$tavoloberloni = new Tavolo();
	$tavoloberloni->lunghezza = 1.60;
	$tavoloberloni->larghezza = 1.20;
	$tavoloberloni->altezza = 0.90;
	$tavoloberloni->marca = "Berloni";
	$tavoloberloni->essenza = "Rovere";
	//stampa l'oggetto tavolo Berloni
	printf("Il tavolo %s in %s e lunghezza=%f larghezza=%f altezza=%f", $tavoloberloni->marca, $tavoloberloni->essenza, $tavoloberloni->lunghezza, $tavoloberloni->larghezza, $tavoloberloni->altezza);
	
		// oggetto Tavolo Silverani allungabile
	$tavolosilverani = new TavoloAllungabile();


?>
