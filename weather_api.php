<?php

$city = "Taipei";
$key = "44f2b78eff9a949036d4ba2eb3f26528";
$weather_api = "https://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=".$key;
$weather_data = json_decode(file_get_contents($weather_api),true);

$high_temp = (int)$weather_data['main']['temp_max'];
$low_temp = (int)$weather_data['main']['temp_min'];
$description = $weather_data['weather'][0]['description'];
$icon_img = $weather_data['weather'][0]['icon'];
$icon = "http://openweathermap.org/img/wn/".$icon_img."@2x.png";
// test ui
echo "<div style='text-align:center; margin:0 auto; background-color: #c8d6e5'><h2>Current City Weather <br>".$city." </h2><img src=".$icon."><h4>high temperature :" .$high_temp."&#8451;<br>low temperature :" .$low_temp,"&#8451;<br>",$description, "</h4></div>" ;


?>

