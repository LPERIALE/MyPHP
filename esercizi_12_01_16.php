<html>

	<form method="get">
		Primo valore: <input type="text" name="a"/></input>
		Secondo valore: <input type="text" name="b"/></input>
		Terzo valore: <input type="text" name="c"/></input>
		<input type="submit" value="calcola"/>
	</form>
	
</html>


<?php

	/*soluzione di ax+b=0
	 * if(isset($_GET["a"]) and isset($_GET["b"])){
		$a=$_GET["a"];
		$b=$_GET["b"];
		$x = ($b)*(-1)/($a);
		echo $x;
	}
	*/
	
	calcolo modulo di un numero
	if(isset($_GET["a"])) {
		$a=$_GET["a"];
		if ($a < 0) {
			$a=-$a;
			}
			echo $a;
		}
		
	
	
	/*comprare cellulare con prezzo base, 40€ per ogni optional, -20€ per ogni mese di possesso con anni in input
	echo "primo valore = prezzo base <br /> 
			secondo valore = numero optional<br />
			terzo valore = anni di possesso";
	
	if(isset($_GET["a"]) and isset($_GET["b"]) and isset($_GET["c"])){
		$prezzo=$_GET["a"];
		$optional=$_GET["b"];
		$anni=$_GET["c"];
		
		$x = $prezzo + 40*$optional - 20*12*$anni;
		echo "<br />Il prezzo massimo spendibile &egrave " . $x . " euro.";	
	}
	*/
	
	

	


?>
