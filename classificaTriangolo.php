<html>

	<form method="get">
		Primo lato: <input type="text" name="x"/>
		Secondo lato: <input type="text" name="y"/>
		Terzo lato: <input type="text" name="z"/>
		<input type="submit" value="calcola"/>
	</form>
	
</html>


<?php
	include "classiClassificaTriangoli.php";
	
	if(isset($_GET["x"]) and isset($_GET["y"]) and isset($_GET["z"])){
		$x=$_GET["x"];
		$y=$_GET["y"];
		$z=$_GET["z"];
		
		$calc=new Calcoli($x,$y,$z);
		
		$calc-> Classifica();
	}
	

	
		
		
	

?>
