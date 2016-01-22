<?php
//fare una tabella in html che faccia vedere se il posto è occupato o meno con i tag html
//vuole degli x o colorare la cella

include "database_prenotazioni.php";

?>


<html>
<body>
	<table border="1">

		<?php foreach ($posti as $fila=>$postioccupati) : ?>
			
			<tr>
				
			</tr>
			
			<tr>
				<td>
					<?php echo $fila ?>
				</td>
				<?php for($i=1; $i<=10; $i++) : ?>
					
						<?php if(isset($posti[$fila][$i])) : ?>
							<td width=10px bgcolor="red"></td>
						<?php else :?>
							<td width=10px bgcolor="green"></td> 
						<?php endif ; ?>
					
				<?php endfor ; ?>
			</tr>
		
		<?php endforeach ; ?>
	
	</table>

	

</body>
</html>
