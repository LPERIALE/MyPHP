<html>

	<form method="get">
		<input type="text" name="cibo"/></input>
		<input type="submit" value="cerca"/>
	</form>
</html>


<?php
	include "database-cibi.php";
	
	
	if(isset($_GET["cibo"])) {	
		
		$val=$_GET["cibo"];
		
		foreach ($cibieingredienti as $cibo=>$ingr) {
			$pos=strpos($cibieingredienti[$cibo],$val);
			if($pos!==false) { /*!== è più stretto di !=, serve per specificare SOLO false, se metto != devo aggiungere ==0, se no perdo dei dati*/
				echo $cibo;
				echo "<br />";}

		}
	}
	
?>
