<?php
	$posti=array(
		"fila1"=>array (1=>1, 
						4=>1,
						9=>1),
		"fila2"=>array (5=>1, 
						8=>1,
						9=>1),
		"fila3"=>array (8=>1, 
						9=>1,
						10=>1),	
		"fila4"=>array (1=>1, 
						4=>1,
						5=>1,
						6=>1,
						9=>1,
						10=>1)			
		);	
	
?>

<?php
	class Platea {
		private $posti;
		private $postiperfila;
		
		public function __construct($p,$n) {
			$this->posti=$p;			//array per posti prenotati
			$this->postiperfila=$n;		//array per numero di posti per fila (così è configurabile)
			}
		
		//restituisce l'array dei nomi delle file della platea
		public function getFile() {		
			return array_keys($this->posti);
			}
		
		//restituisce l'array con i numeri di posto
		public function getPosti() {	
			$n=array();
			for ($i=1; $i<=$this->postiperfila; $i++) {
				$n[]=$i;
				}	
			return $n;
			}
		
		//controlla se il posto specificato è prenotato
		//ritorna un intero: 0 (libero), 1 (prenotato), -1 (fila o numero posto non validi)
		public function isPrenotato($f,$p) {  //chiede fila e posto
			//controlla se la fila è valida
			if (isset($this->posti[$f])) {
				//controlla se il posto è valido
				if ($p >=1 && $p <= $this->postiperfila) {
					if (isset($this->posti[$f][$p])) {
						return 1;
						}		
					else {
						return 0;
						}			
					}
				else {
					return -1;}
				} 
			else {
				return -1;}
			}
		
		//prenota un posto
		//ritorna: 0 (posto già prenotato), 1(posto prenotato con successo), -1 (fila o numero posto non validi)
		public function prenota($f,$p){
			$prenotato=$this->isPrenotato($f,$p);
			if ($prenotato==0) {
				//prenota il posto
				$this->posti[$f][$p]=1;
				return 0;
				}
			else {
				return $prenotato;
				}
			}
		
		//cancella la prenotazione
		//ritorna: 0 (posto non era prenotato), 1(prenotazione cancellata), -1 (fila o numero posto non validi)
		public function cancella($f,$p){
			$cancella=$this->isPrenotato($f,$p);
			if ($cancella==1) {
				//prenota il posto
				unset ($this->posti[$f][$p]);
				return 1;
				}
			else {
				return $cancella;
				}
			}	
		}

function queryCinema($n) {
	
	$posti=array(
		"fila1"=>array (1=>1, 
						4=>1,
						9=>1),
		"fila2"=>array (5=>1, 
						8=>1,
						9=>1),
		"fila3"=>array (8=>1, 
						9=>1,
						10=>1),	
		"fila4"=>array (1=>1, 
						4=>1,
						5=>1,
						6=>1,
						9=>1,
						10=>1)			
		);	
	
	return new Platea($posti,$n);  //parametri del mio costruttore:array di file, n°posti per fila preso da tastiera
	}
