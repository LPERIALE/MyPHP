<?php
	if (isset($_POST["nomeUtente"])) {
	
		echo "Ciao ".$_POST["nomeUtente"];
	}
	
	else {
		echo "Nome non specificato";
	}
?>
