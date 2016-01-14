<html>

	<?php
	include "classi.php";
	
	$calc=new Calcoli(null,null);
	
	if(isset($_GET["x"]) and isset($_GET["y"])){
		$calc=new Calcoli($_GET["x"],$_GET["y"]);
	}
	

	?>
	
	<form method="get">
		Primo valore: <input type="text" name="x" value=<?php echo $calc->a?>></input>
		Secondo valore: <input type="text" name="y" value=<?php echo $calc->b?>></input>
		
		<select name="Calcolo">
			<option value="somma">Somma</option>
			<option value="precSucc">Precedente e successivo</option>
			<option value="media">Media</option>
			<option value="calcolatrice">Calcolatrice</option>
			<option value="areaQuadrato">Area quadrato</option>
			<option value="areaCerchio">Area cerchio</option>
			<option value="areaTriangolo">Area triangolo equilatero</option>
			<option value="Mese">Nome del mese</option>
		</select>
		
		<input type="submit" value="calcola"/>
	</form>
	
<?php
	
	if(isset($_GET["x"]) and isset($_GET["y"])){
		$azione=$_GET["Calcolo"];
		
		$calc=new Calcoli($_GET["x"],$_GET["y"]);

		switch ($azione) {
			case "somma":
				echo "Somma: " . $calc->somma();
				echo "<br />";
				break;
			
			case "precSucc":
				echo "<b>Primo valore</b> <br />" . $calc->precSucc($x)."<br />";
				echo "<b>Secondo valore</b> <br />" . $calc->precSucc($y);
				break;
			
			case "media":
				echo "Media: " . $calc->media();
				echo "<br />";
				break;
				
			case "calcolatrice":
				$calc->calcolatrice();
				echo "<br />";
				break;
			
			case "areaQuadrato":
				echo "Area quadrato: " . $calc->areaQuadrato() . "<br />";
				break;
			
			case "areaCerchio":
				echo "Area cerchio: " . $calc->areaCerchio() . "<br />";
				break;
				
			case "areaTriangolo":
				echo "Area triangolo: " . $calc->areaTriangolo() . "<br />";
				break;
			
			case "Mese":
				if ($x<=12 && $x>0)	{
					echo "Il mese dato dal primo valore &egrave: " . $calc->mese($x) . "<br />";
					}
				
				if ($y<=12 && $x>0)	{
					echo "Il mese dato dal secondo valore &egrave: " . $calc->mese($y) . "<br />";
					}
			}
		
	}
	

?>


