<?php
//Chuyển từ Json sang PHP ta dùng: json_decode
$json1 ='["nguyen van a","nguyen van b","nguyen van c"]';

$json2 = '{"name":"nguyen van a","age":21,"location":"Bac Ninh"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "<pre>";
print_r($convert2);
echo "</pre>";
