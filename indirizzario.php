<html>
	<form method="post">
	
		<label>Inserisci il nome</label><br />
			<input type="text" name="nome"><br /><br />
	
		<label>Inserisci il cognome</label><br />
			<input type="text" name="cognome"><br /><br />

		<label>Inserisci l'indirizzo</label><br />
			<input type="text" name="indirizzo"><br /><br />

		<label>Inserisci il numero di telefono</label><br />
			<input type="text" name="tel"><br /><br />

		<label>Inserisci il numero di cellulare</label><br />
			<input type="text" name="ncell"><br /><br />
	
		<input type="submit" value="Invia"/><br />
	
	</form>

</html>

<?php
	include "libreria_classi.php";

	if (isset($_POST["nome"]) &&
	isset($_POST["cognome"]) &&
	isset($_POST["indirizzo"]) &&
	isset($_POST["tel"]) && 
	isset($_POST["ncell"])) {
		
		$indirizzo=new IndirizzoEsteso();
		$indirizzo->nome=$_POST["nome"];
		$indirizzo->cognome=$_POST["cognome"];
		$indirizzo->indirizzo=$_POST["indirizzo"];
		$indirizzo->tel=$_POST["tel"];
		$indirizzo->ncell=$_POST["ncell"];

		echo "Dati utente:<br />";
		echo $indirizzo->visualizza();
		}


?>
