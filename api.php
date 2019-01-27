<?php 
$ch = curl_init(); 
$url = "https://conuhacks-playback-api.touchtunes.com/".explode('.php',$_SERVER['REQUEST_URI'], 2)[1];
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch ,CURLOPT_HTTPHEADER,array('client-secret: 9923ac9b-8fd3-421f-b0e5-952f807c6885'));
$output = curl_exec($ch); 
echo $output;
?>
