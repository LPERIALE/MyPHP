<?php

include "database_prenotazioni.php";

$cinema=queryCinema(16);

$nfila="";
$nposto="";
$risultato="";

//if (isset($_POST["nfila"]) && isset($_POST["nposto"])) {
	//$nfila=$_POST["nfila"];
	//$nposto=$_POST["nposto"];
	//$prenota=$_POST["prenota"];
	//$cancella=$_POST["cancella"];
	
if (isset($_POST["nfila"]) && isset($_POST["nposto"]) && isset($_POST["prenota"])) {
		
	$nfila=$_POST["nfila"];
	$nposto=$_POST["nposto"];
	$prenota=$_POST["prenota"];

	$ris_prenota=$cinema->prenota($nfila,$nposto);
}
	
if (isset($_POST["nfila"]) && isset($_POST["nposto"]) && isset($_POST["cancella"])) {
	$nfila=$_POST["nfila"];
	$nposto=$_POST["nposto"];

	$cancella=$_POST["cancella"];
	
	$ris_cancella=$cinema->cancella($nfila,$nposto);	
}

?>

<html>

	<body>
		
		<table border="1">
			
			<?php foreach($cinema->getFile() as $fila) : ?>
				<tr>
					<?php foreach($cinema->getPosti() as $posto) : ?>
							<?php if($cinema->isPrenotato($fila,$posto)==0) : ?>
								<td width=15px height=20px bgcolor="green"> </td> 
							<?php else : ?>
								<td width=15px height=20px bgcolor="red"> </td>
							<?php endif ; ?>
					<?php endforeach ; ?>
				</tr>
			
			<?php endforeach ; ?>
		
		</table>
		
		<br />
		Scegli la fila: <br />
		<form method="post">
			<select name="nfila">
				<?php foreach($cinema->getFile() as $f) : ?>
					<option value="<?php echo $f; ?>"> <?php echo $f; ?> </option>
				<?php endforeach ; ?>
			</select>
		<br />
		<br />
		Scegli il posto: <br />

			<select name="nposto">
				<?php foreach($cinema->getPosti() as $p) : ?>
					<option value="<?php echo $p; ?>"> <?php echo $p; ?> </option>
				<?php endforeach ; ?>
			</select>
		
		<br />
			
			<input type="submit" value="prenota" name="prenota"></input>
			<input type="submit" value="cancella prenotazione" name="cancella"></input>
		</form>
	<br />
	
	<?php if (isset($_POST["nfila"]) && isset($_POST["nposto"]) && isset($_POST["prenota"])) : ?>
		<?php if ($ris_prenota ===0) : ?>
			Il posto <?php echo $nposto; ?> <?php echo $nfila; ?> &egrave stato prenotato con successo!<br />
		<?php else : ?>
			Non &egrave possibile prenotare il posto <?php echo $nposto; ?> <?php echo $nfila; ?>  <br /> - 
		<?php endif ; ?>
		
	<?php elseif (isset($_POST["nfila"]) && isset($_POST["nposto"]) && isset($_POST["cancella"])) : ?>
		<?php if ($ris_cancella ===0) : ?>
			La prenotazione del posto <?php echo $nposto; ?> <?php echo $nfila; ?>  &egrave stata annullata.<br />
		<?php else : ?>
			Il posto <?php echo $nposto; ?> <?php echo $nfila; ?>  non era prenotato! <br /> - 
		<?php endif ; ?>
	<?php endif ; ?>
	
	</body>

</html>
