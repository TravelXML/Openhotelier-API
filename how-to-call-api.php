<?php
$ohEndpoint = 'https://openhotelier.com/api/partner/v2/';
$rawJsonData = '{  
				   "country_code" : "mv",  
				   "action" : "4",  
				   "xml" : "0"  
               }';
$curl = curl_init($ohEndpoint);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	"Content-type: application/json",
	"APIKEY: XXXXXXXXXXXXXXXXXXXXXXXXXXX"
));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $rawJsonData);
echo $JsonResponse = curl_exec($curl);
// Check if any error occurred
if (curl_errno($curl)) {
	echo 'Curl error: ' . curl_error($curl);
}
curl_close($curl);
?>
