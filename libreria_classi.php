<?php
	//classe con solo proprietà, senza metodi
	class Indirizzo {
		public $nome;
		public $cognome;
		public $indirizzo;
		public $tel;			
		
		public function nomeCompleto() {
			$n=$this->nome." ".$this->cognome;
			return $n;}
	
		public function visualizza() {
			$n=$this->nomeCompleto();
			$n=$n."<br />";
			$n=$n.$this->indirizzo;
			$n=$n."<br />";
			$n=$n.$this->tel;
			return $n;}
		}

	class IndirizzoEsteso extends Indirizzo {
		public $ncell;

		public function visualizza() {
			$n=parent::visualizza();
			$n=$n."<br />";
			$n=$n.$this->ncell;
			return $n;}
		}

	class Animale {
		const NZAMPE=0;
		public $nome;

		public function verso() {
			return "boh!";}
	}

	class Cane extends Animale {
		const NZAMPE=4;		
		public function verso(){
			return "BAU!";}
	}

	class Papero extends Animale {
		const NZAMPE=2;		
		public function verso(){
			return "QUACK!";}
	}

	class Pesce extends Animale {
		const NZAMPE=0;		
		public function verso(){
			return "*O*!";}
	}




?>
