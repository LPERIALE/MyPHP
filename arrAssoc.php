<?php
	$ar=array("fish"=>"pesce","snail"=>"lumanca","turtle"=>"tartaruga","pig"=>"maiale","crow"=>"corvo","sheep"=>"pecora");
	$ar["cat"]="gatto";
	$ar["dog"]="cane";
	
	ksort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
	echo "<br />";
	asort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
	echo "<br />";
	arsort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
	echo "<br />";
	krsort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
	echo "<br />";
		sort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
	echo "<br />";
		rsort($ar);
	foreach ($ar as $i=>$str) {
		
		echo $i."- ".$str;
		echo "<br />";
		
	}
?>
