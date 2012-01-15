<?

//put your api key here
//you can get your api key by going to http://odigger.com/api/v1/getAPIKey.php
$api_key = 'pasteYourApiKeyHere';

DEFINE('ODIGGER_OFFERS_API_KEY', $api_key);
DEFINE('ODIGGER_OFFERS_API_URL', 'http://odigger.com/api');

//include the functions
include_once('oDiggerOffers-apiFunctions.php');
include_once('oDiggerOffers-xmlToArrayClass.php');
include_once('oDiggerOffers-curlClass.php');

session_start();

?>