<? include_once('oDiggerOffers-config.php'); 

$isDebug = null != $_GET["debug"] && true == $_GET["debug"] ? true : false;

//build the get query for the oDiggerOffers restful api
$get = array();
$get['apiKey'] = ODIGGER_OFFERS_API_KEY;
$query = http_build_query($get);



//build the oDiggerOffers api string
$networksSearchPath = "/o202/getNetworks?$query";
$url = ODIGGER_OFFERS_API_URL . $networksSearchPath;

$xml = getUrl($url);

$getNetworks = convertXmlIntoArray($xml);
$getNetworks = $getNetworks['getNetworks'];
$networks = $getNetworks['networks'][0]['network'];

echo "<select name='networkId' id='networkId' onchange='setOffersPref();'>";
	echo "<option value=''>All Networks</option>";
	echo "<option value=''>--</option>";
	for ($x = 0; $x < count($networks); $x++) { 
			
		$html = array_map('htmlentities', $networks[$x]);
		
		if ($_SESSION['oDiggerOffers_network_id'] == $html['networkId']) 	$selected = 'SELECTED';
		else 																$selected = '';
		
		echo "<option $selected value='{$html['networkId']}'>{$html['networkName']} ({$html['networkOffers']})</option>";
		
	}
echo "</select>"; 