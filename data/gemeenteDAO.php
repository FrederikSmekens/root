<?php
require_once 'DBConfig.php'; 
require_once 'entities/gemeente.php';

class GemeenteDAO{
	
	public function addGemeente($nisCode,$show,$gemeente){	

			$sql = "INSERT INTO gemeente (Nis_Code,Show,GemeenteNaam)
					values (:Nis_Code,:Show,:GemeenteNaam)"; 	
		
		
		
			$connection = new PDO('mysql:host=localhost;dbname=verkiezingen','root','usbw');
			
			print_r($connection); exit();
			$stmt = $dbh->prepare($sql); 

			$stmt->execute(array(
				':Nis_Code' => $niscode,
				':Show'=>$show,
				':GemeenteNaam'=>$gemeentenaam
			) );
		
			$dbh = null;
	}

}