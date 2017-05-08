<?php
$access_token = 'ogO7lE84pHv4FrkI0Cal3NRq8YfVl5+p39CN4CGi6GN9RBqedI1OpExEtlom+xZ3CRFA2LKs0e/+TTo0nphtoSmwyeIEIzVi98JnbOTEP1L2u5oFugG4rjVCw6oIiaw7SSwnepKI5oFtYGvvI+RvgwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
