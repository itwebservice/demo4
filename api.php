  <?php
//include('config.php');
$base_url_api_main = "http://localhost/tours/demo4/frontendAPI8/public/api";

$Apigeneral = json_decode(file_get_contents($base_url_api_main.'/general'));
$Apisocial = json_decode(file_get_contents($base_url_api_main.'/social'))[0];
$Apifooter = json_decode(file_get_contents($base_url_api_main.'/footer'));

$Apidestination = json_decode(file_get_contents($base_url_api_main.'/destination'));
// $Apigallery = json_decode(file_get_contents($base_url_api_main.'/gallery'));
// $Apiassoc = json_decode(file_get_contents($base_url_api_main.'/association'));
// $Apitransport = json_decode(file_get_contents($base_url_api_main.'/transport'));

//done apis
// $Apipackage = json_decode(file_get_contents($base_url_api_main.'/package/popular'));
// $Apiactivity = json_decode(file_get_contents($base_url_api_main.'/activity/popular'));
// $Apitestimonial = json_decode(file_get_contents($base_url_api_main.'/testimonial'));
// $Apibanner = json_decode(file_get_contents($base_url_api_main.'/banner'));
// $Apihotel = json_decode(file_get_contents($base_url_api_main.'/hotel/popular'));
// $Apiblog = json_decode(file_get_contents($base_url_api_main.'/blogs'));
// echo "<pre>";
// print_r($Apibanner);
// echo "</pre>";
?>