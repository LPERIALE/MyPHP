<?php

include "database_distanze.php";

//trova le possibili città di partenza:array_keys restituisce le chiavi
$listapartenza=array_keys($distanze); 
$listadestinazione=array(); 
$partenza="";

if (isset($_GET["partenza"])) {
		
	//controllo che la città di partenza esista nell'array
	if (isset($distanze[$_GET["partenza"]])) {

		$partenza=$_GET["partenza"];
		
		//trova le città destinazione in base alla città partenza specificata
		$listadestinazione=array_keys($distanze[$partenza]);
		}
	
	}

$destinazione="";
if (isset($_GET["destinazione"])) {
	
	//controlla se nell'array distanza l'indice della città di destinazione è puntata dalla città di partenza 
	if (isset($distanze[$partenza][$_GET["destinazione"]])) {
		$destinazione=$_GET["destinazione"];
		}
	}

$distanza="sconosciuta";

if ($partenza != "" && $destinazione != "") {
	//città di destinazione e di partenza sono valide
	$distanza=$distanze[$partenza][$destinazione];
	}	

?>


<html>
<body>
	<form method="get">
		
		<?php if ($partenza == "") : ?>  <!--mostro la tendina partenza se la città di partenza NON è stata ancora specificata-->
		
			<select name="partenza">
				
				<?php foreach ($listapartenza as $c) : ?>	<!--apro e chiudo un php per ciclare le partenze-->
					<option value="<?php echo $c; ?>">	<!--nell'option gli metto come value quello che prendo da tendina-->
									<?php echo $c; ?>	<!--quello che vedo nella tendina-->
					</option>
				<?php endforeach; ?>
			</select>
			
		<?php else : ?>
			Citt&agrave di partenza: <?php echo $partenza ?>
			<br />
			<input type="hidden" name="partenza" value="<?php echo $partenza ?>"></input>
		<?php endif ; ?>

			
		<?php if ($partenza != "" && $destinazione =="") : ?>
			Seleziona citt&agrave di destinazione:
			<select name="destinazione">
				<?php foreach ($listadestinazione as $c) : ?>	
					<option value="<?php echo $c; ?>">	
									<?php echo $c; ?>	
					</option>
				<?php endforeach; ?>
			</select>
		<?php endif ; ?>	

		<?php if ($partenza == "" || $destinazione =="") : ?>
		<input type="submit" value="Next"></input>
		<?php else : ?>
		<a href="/MyPHP/distanze.php">inizio</a>
		<?php endif ; ?>
	
	</form>
	
	<?php if ($partenza != "" && $destinazione !="") : ?>
	La citt&agrave di destinazione &egrave <?php echo $destinazione ; ?>
	<br />
	La distanza tra	<?php echo $partenza ; ?> e <?php echo $destinazione ; ?> &egrave di <?php echo $distanza ; ?> km
	<?php endif ; ?>
	
</body>
</html>
