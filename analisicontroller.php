<?php
	$testo="";
	if(isset($_POST["testo"]))  {
		$testo=$_POST["testo"];
	}
	$conta=explode(" ",$testo);
	$result=count($conta);
	
	echo "Numero parole $result";

	echo "<br />";

	$frequenzaparole=[];  /*inizializzo un array associativo*/
	foreach($conta as $parola) {
		
		if(isset($frequenzaparole[$parola])) {  /*verifico se l'ho già vista*/

			$frequenzaparole[$parola]++; /*se sì, incremento il contatore*/
		}else{
		
			$frequenzaparole[$parola]=1; /*se no, l'ho vista una volta*/
		}
	}
	/*ho un array con chiavi = parole ($parola), valori = frequenza*/
	
	arsort($frequenzaparole);  /*ordine inverso, per vedere i più frequenti*/

	foreach($frequenzaparole as $p => $c) {  /*ciclo per stampare  chiave = frequenza*/
		if ($c>=3) {			/*solo quelle con frequenza>=3*/
			echo $p ." = ".$c;
			echo "<br />";
		}
	}

	

?>
