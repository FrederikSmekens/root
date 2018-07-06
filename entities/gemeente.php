<?php

	class Gemeente{
		
    	public $nisCode, $show, $gemeenteNaam;
		
    	public function __construct($nisCode, $show, $gemeenteNaam) {
			
			$this->Nis_Code = $nisCode;
			$this->Show = $show;
			$this->GemeenteNaam = $gemeenteNaam;
	
    	}
	}