<?php

  // call the weather api, pass the lat_lng_array
  $wather = 'https://api.darksky.net/forecast/'.$key.'/64.505736,-165.415307/?exclude=minutely?exclude=hourly?exclude=minutely?exclude=hourly';

  // get the data for the forcast
  $forecast = json_decode(file_get_contents($wather), true);

// Feels like
$temp = $forecast['currently']['temperature'];

if($temp < 50){
	$Feels = 'It\'s is cold outside.';
} else { 
	$Feels = 'It\'s is nice outside.';
}