  <?php
//include('config.php');
$base_url = "https://demo4.itourscloud.com/frontendAPI/api";

$Apipackage = json_decode(file_get_contents($base_url.'/package/popular'));
$Apiactivity = json_decode(file_get_contents($base_url.'/activity/popular'));
$Apigeneral = json_decode(file_get_contents($base_url.'/general'));
$Apisocial = json_decode(file_get_contents($base_url.'/social'))[0];
$Apidestination = json_decode(file_get_contents($base_url.'/destination'));
$Apibanner = json_decode(file_get_contents($base_url.'/banner'));
$Apigallery = json_decode(file_get_contents($base_url.'/gallery'));
$Apifooter = json_decode(file_get_contents($base_url.'/footer'));
$Apitestimonial = json_decode(file_get_contents($base_url.'/testimonial'));
$Apihotel = json_decode(file_get_contents($base_url.'/hotel/popular'));
$Apiassoc = json_decode(file_get_contents($base_url.'/association'));
$Apitransport = json_decode(file_get_contents($base_url.'/transport'));
$Apiblog = json_decode(file_get_contents($base_url.'/blogs'));
// echo "<pre>";
// print_r($Apipackage);
// echo "</pre>";
?>