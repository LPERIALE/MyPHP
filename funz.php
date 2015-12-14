<?php
	//creazione di una funzione
	function increUno($var) {
	
			$var++;
		return $var;	
	}
	function ribString($var) {
	
			$let=strlen($var);
			echo $var;
			echo "<br />";	
			echo $let;
			echo "<br />";	
	
			for ($i=$let-1; $i>=0; $i--) {
				echo $var[$i];
	
			}
		return $var;	
	}
	function ribStr($var) {
	
			$let="";
			for ($i=strlen($var)-1; $i>=0; $i--) {
				$let=$let.$var[$i];
				// il . concatena le stringe
	
			}
		return $let;	
	}
?>
