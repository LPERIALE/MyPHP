<html>

	<form method="GET">
		Inserire una stringa: <input type="text" name="str"/></input>
		Inserire la posizione per separare la stringa: <input type="text" name="div"/></input>
		<input type="submit" value="lavora!"/>
	</form>

<?php
	include "classi.php";
	
	if(isset($_GET["str"]) and isset($_GET["div"])) {
		$miaStringa=new myString($_GET[("str")]);
	
		echo "stringa ribaltata: " . $miaStringa->ribalta();
		
		echo "<br />";
		
		$dividi = $miaStringa->dividi($_GET["div"]);
		echo "stringa separata: ";
		foreach ($dividi as $i=>$strdivisa) {
			switch ($i) {
				case 0:
					echo $strdivisa;
					break;
				case 1:
					echo " / ";
					break;
				case 2:
					echo $strdivisa;	
					break;
				}
			}
		
		echo "<br />";
		
		$evidenzia = $miaStringa->evidenzia($_GET["div"]);
		echo "stringa evidenziata: ";
		foreach ($evidenzia as $i=>$strevidenziata) {
			echo $strevidenziata;}
	}

?>


</html>
