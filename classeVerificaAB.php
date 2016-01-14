<?php

class Verifica {
	
	private $a;
	private $b;
	
	public function __construct($a,$b) {
		$this->a=$a;
		$this->b=$b;
		}
	
	public function verificaPosNeg() {
		if ($this->b < 0) {
			echo "Secondo valore &egrave negativo";
			}
		else {
			echo "Secondo valore &egrave positivo";
			}
		}
	
	public function verificaPariDispari() {
		if ($this->a % 2 == 0) {
			echo "Primo valore &egrave pari";
			}
		else {
			echo "Primo valore &egrave dispari";
			}
		}
	
	public function somma() {
		$somma=$this->a+$this->b;
		return $somma;
		}
			
	public function risMax() {
		$pospos=($this->a) + ($this->b);
		$posneg=($this->a) + (-$this->b);
		$negpos=(-$this->a) + ($this->b);
		$negneg=(-$this->a) + (-$this->b);
		$ordine=array("++"=>$pospos, "+-"=>$posneg, "-+"=>$negpos, "--"=>$negneg);
		arsort($ordine);
		$segno=array_keys($ordine)[0];
		echo "Il valore massimo &egrave ". $ordine[$segno] . " e viene con i segni " . $segno . "<br />";
		}
	
	} 
	
	


?>
