<html>

	<form method="get">
		Primo valore: <input type="text" name="x"/></input>
		Secondo valore: <input type="text" name="y"/></input>
		<input type="submit" value="calcola"/>
	</form>
	
</html>


<?php
	include "classeVerificaAB.php";
	
	if(isset($_GET["x"]) and isset($_GET["y"])){
		$x=$_GET["x"];
		$y=$_GET["y"];
		
		$verifica=new Verifica($x,$y);
		
		echo "<b>Verifica sul secondo numero <br /></b>";
		$verifica->verificaPosNeg();
		echo "<br />";
		
		echo "<b>Verifica sul primo numero <br /></b>";
		$verifica->verificaPariDispari();
		echo "<br />";
		
		echo "Somma: " . $verifica->somma() . "<br />";
		
		echo "<b>Somma massima:</b><br />"; 
		$verifica->risMax();

		
		
		
	}
?>
