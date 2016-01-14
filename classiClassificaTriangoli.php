<?php
Class Calcoli {
			public $a;
			public $b;
			public $c;
			
			public function __construct($a,$b,$c) {
				$this->a=$a;
				$this->b=$b;
				$this->c=$c;
				}
			
			public function Classifica(){
				$sumab=$this->a+$this->b;
				$sumbc=$this->b+$this->c;
				$sumac=$this->a+$this->c;
				
				if ($this->a == $sumbc || $this->b == $sumac || $this->c == $sumab) {
					$degenere=1;
					}
				else {
					$degenere=0;
					}
				
				if ($this->a < $sumbc && $this->b < $sumac && $this->c < $sumab) {
					$valido=1;
					}
				else {
					$valido=0;}
				
				switch ($degenere) {
					case 1:
							echo "Il triangolo &egrave degenere <br />";
							break;
					
					case 0:
							switch ($valido){
								case 0:
									echo "Il triangolo non &egrave valido <br />";
									break;
								
								case 1:
									echo "Il triangolo non &egrave degenere ed &egrave valido <br />";
									if ($this->a==$this->b && $this->a==$this->c){
										echo "Il triangolo &egrave equilatero <br />";
										}
									else {
										if ($this->a==$this->b || $this->a==$this->c || $this->b==$this->c) {
											echo "Il triangolo &egrave isoscele <br />";
											}
										else {
											echo "Il triangolo &egrave scaleno <br />";
											}
										}
									}
						}
				}
			
			
		}
?>
