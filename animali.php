<?php
	
	include "libreria_classi.php";

	function presenta($animale) {
		$r="Sono ".$animale->nome;
		$r.="<br />ho ".$animale::NZAMPE." zampe";  //la sintassi .= concatena alla var quello che metto dopo =
		$r.="<br />faccio ".$animale->verso();

		return $r;
	}
	
	//creo array
	
	$animali=array();
	
	$a=new Cane();  //crea un istanza di Cane (con verso e zampe definite da classe)
	$a->nome="Fido";
	$animali[]=$a;

	$a=new Cane();  //crea altra istanza di Cane
	$a->nome="Wolf";
	$animali[]=$a;

	$a=new Papero();  
	$a->nome="Paperino";
	$animali[]=$a;

	$a=new Pesce();  
	$a->nome="Nemo";
	$animali[]=$a;


	foreach ($animali as $a) {
		echo presenta($a);
		echo "<br /><br />";
	}


?>
