<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec($ch));

if ($result->status = "success") {
    echo "Country:" . $result->country . '<br>';
    echo "Region:" . $result->region . '<br>';
    echo "City:" . $result->city . '<br>';
    echo "isp:" . $result->isp . '<br>';
    echo "query:" . $result->query . '<br>';
}
