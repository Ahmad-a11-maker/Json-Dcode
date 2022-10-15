<?php
$json = '{"domain":"stmikelrahma.ac.id","core":"web sevice using RestFul","address":{"street" : "Sisingamangaraja Streetnumber 76","city":"Yogyakarta","Zipcode":"554321"},"phone":"(0274)55124"}';
echo "<pre>";
print_r( json_decode($json));
$data1=json_decode($json); //object
$data2=json_decode($json,true); //array
//cara menampilkan data object
echo "<h1>kampus : ".$data1->domain."</h1>";
//cara menampilkan data array
echo "<h1>pelajaran : ".$data2["core"]."</h2>";

echo "<h1>Alamat object : ".$data1->address->city."</h1>";
?>	