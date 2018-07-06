<?php
require_once 'DBConfig.php'; 
require_once 'entities/gemeente.php';

class GemeenteDAO{
	
	public function addGemeente($nisCode,$show,$gemeente){	

			$sql = "INSERT INTO gemeente (Nis_Code,Show,GemeenteNaam)
					values (:Nis_Code,:Show,:GemeenteNaam)"; 	
		
			print $nisCode . $show . $gemeente . '<br>';
			print_r(DBConfig::$DB_CONNSTRING . DBConfig::$DB_USERNAME . DBConfig::$DB_PASSWORD);
			$dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD); 

		
			$stmt = $dbh->prepare($sql); 

			$stmt->execute(array(
				':Nis_Code' => $niscode,
				':Show'=>$show,
				':GemeenteNaam'=>$gemeentenaam
			) );
		
			$dbh = null;
	}

}