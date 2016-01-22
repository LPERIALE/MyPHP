<?php
Class Calcoli {
			public $a;
			public $b;
			
			public function __construct($a,$b) {
				$this->a=$a;
				$this->b=$b;
				}
			
			public function somma() {
				$somma=$this->a + $this->b;
				return $somma;
				}
				
			public function precSucc($a) {
				$prec=$a-1;
				$succ=$a+1;
				return "precedente: " . $prec . "<br />" . "successivo: " . $succ;
				}
				
			public function media() {
				$media=($this->a+$this->b)/2;
				return $media;}
				
			public function calcolatrice() {
				$somma=$this->somma();
				$sottrazione=$this->a - $this->b;
				$moltiplicazione=$this->a * $this->b;
				$divisione=$this->a / $this->b;
				echo "<b>Calcolatrice</b><br /> somma " . $somma . "<br />sottrazione " . $sottrazione . "<br />moltiplicazione " . $moltiplicazione . "<br />divisione " . $divisione;}
				
			public function areaQuadrato() {
				$area=$this->a*$this->a;
				return $area;}
				
			public function areaCerchio() {
				$area=pi()*($this->a/2)*($this->a/2);
				return $area;}
			
			public function areaTriangolo() {
				$h=($this->a*sqrt(3))/2;
				$area=($h*$this->a)/2;
				return $area;}
			
			public function Mese($mese) {
					switch ($mese) {
						case 1:
							$giorno=$mese*30;
							break;
						case 3:
						case 5:
						case 7:
						case 8:
						case 10:
						case 12:
							$giorno=$mese*30-25;
							break;
						case 2:
							$giorno=$mese*28+2;
							break;
						case 4:
						case 6:
						case 9:
						case 11:
							$giorno=$mese*30-25;
							break;
						}
				$nome=jdmonthname($giorno,3);
				return $nome;
				}
		}
		
class MyString {
	private $testo;
	public $r;
	private $i;
	public $div;
	public $prima;
	public $dopo;
		
	public function __construct($testo) {
		$this->testo=$testo;
		}
	
	public function ribalta() {
		$r="";
		for ($i=strlen($this->testo)-1; $i>=0; $i--) {
			$r=$r . $this->testo[$i];
			}	
		return $r;
		}
		
	 //dividi stringa in due parti in base a quanto prendi da video
	public function dividi($div) {
		$inizio=strpos($this->testo,$div);
		if ($inizio > -1) {
			//$fine=strpos($this->testo,$div[strlen($div)-1]);
			$primaparte=substr($this->testo, 0,$inizio);
			//$terzaparte=substr($this->testo, $fine+1,strlen($this->testo)-1);
			$terzaparte=substr($this->testo, $inizio + strlen($div));
			$risultato = array();
			$risultato[0]=$primaparte;
			$risultato[1]=$div;
			$risultato[2]=$terzaparte;
			return $risultato;
		} else {
			$risultato = array();
			$risultato[0]=$this->testo;
			$risultato[1]="";
			$risultato[2]="";
			return $risultato;
			}
		}
	
	//evidenzia parte usata per dividere
	public function evidenzia($div)	{
		$risultato=$this->dividi($div);
		$centro="<b>".$risultato[1]."</b>";
		$risultato[1]=$centro;
		return $risultato;}

	}


?>
