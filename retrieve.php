<?php
require_once 'services/gemeenteService.php';
require_once 'entities/gemeente.php';



$url = 'http://qeq.be/verkiezingen/1M23104_CG.EML';

$xml = simplexml_load_file($url) or die ("Error: Cannot create object");
$nisCode = $xml->Count->Election->Contests->Contest->ContestIdentifier[0]->attributes()->IdNumber;
$gemeente = $xml->Count->Election->Contests->Contest->ContestIdentifier->ContestName;


print "Contest Name: " . $gemeente . "<br>" ;
print "NIS Number: " . $nisCode . "<br>";
print "Total Valid Votes: " . $xml->Count->Election->Contests->Contest->TotalVotes->Selection->ValidVotes . "<br>";


print "<br>";

$arrLijsten = $xml->Count->Election->Contests->Contest->ReportingUnitVotes;

foreach($arrLijsten as $lijst)
{
	print "Lijst: " . $lijst->Selection->AffiliationIdentifier->RegisteredName . "<br>";
	print "Valid votes: " . $lijst->Selection->ValidVotes . "<br><br>";
}



if (isset($_POST['Submit'])) {

	$gemeenteSvc = new GemeenteService();
	$gemeenteSvc->addGemeente($nisCode, 'true', $gemeente);
	

}



print "<br>__________________________________________________________________________________<br><br>";
//print_r($xml);

?>


<form action="" method="post">
    <input type="submit" name="Submit" value="Submit" />
</form>