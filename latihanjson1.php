<?php
$val = [
	"domain"=>"stmikelrahma.ac.id",
	"core"=>"web sevice using RestFul",
	"address"=>[
		"street" => "Sisingamangaraja Street number 76",
		"city"=>"Yogyakarta",
		"Zipcode"=>"554321"
	],
	"phone"=>"(0274)55124"
];
$output = json_encode($val);
echo $output;
?>	