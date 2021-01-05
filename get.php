<?php
$city = 'Bangalore';

$country = 'IN';

$Key='55e483a76a91ecf90eb9b56bd24fe458';

$url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en&appid=.$Key";

$json=file_get_contents($url);

$data=json_decode($json,true);

echo "<h2>Current Temperature in" . $city . "is : <button class='btn btn-success'>" . $data['main']['temp'] . "&#176; Celcius</button></h2>";

echo "<h2>Wind Speed is :<u>" . $data['wind']['speed'] . "</u> KMPH</h2>";

echo "<h2>Humidity is :<u>" . $data['main']['humidity'] . "</u> %</h2>";

echo "<h2>Weather condition:<u>" . $data['weather'][0]['main']  . "</u>";

echo "<img src='http://openweathermap.org/img/w/" .$data['weather'][0]['icon']. ".png' width='90' height='90'></h2>";


?>
