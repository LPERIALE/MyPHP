<?php

//connessione al DB
$link = mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");

//esecuzione query
$query = mysql_query("SELECT login,password FROM utente");

echo "<table border=1>\n";

//iterazione sui risultati
while ($record = mysql_fetch_assoc($query)) 
	{
		echo "<tr>";
		echo "<td>". $record['login']."</td>";
		echo "<td>". $record['password']."</td>";
		echo "</tr>";
	}

echo "</table>";
?>
