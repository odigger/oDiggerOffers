<? include_once('oDiggerOffers-config.php'); 

//if changing the limit, only change the limit
if ($_POST['limit']) { 
	$_SESSION['oDiggerOffers_limit'] = $_POST['limit'];
} else { 
	//set the preferences
	$_SESSION['oDiggerOffers_query'] = $_POST['query'];
	$_SESSION['oDiggerOffers_network_id'] = $_POST['networkId'];
}
