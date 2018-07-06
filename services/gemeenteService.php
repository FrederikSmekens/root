<?php
require_once 'data/gemeenteDAO.php';

class GemeenteService {
	
    public function addGemeente($nisCode, $show, $gemeenteNaam )
    {
		
        $gemeenteDAO = new GemeenteDAO();		
       	$gemeenteDAO->addGemeente($nisCode, $show, $gemeenteNaam);
	
    }
}