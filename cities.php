<?php

	require_once('meekrodb.class.php');

	$cities = file_get_contents('http://localhost:3000/cities');
	$json = json_decode($cities);
	print "<pre>";
	print_r ($cities);
	foreach($json as $city){
		print "City Name: " . $city->name;
		print "<br>";
		print "City Population: " . $city->pop;
		print "<br>";
		print "City Country: " . $city->country;
		print "<hr>";


		DB::insert('cities', array(
			'name'=>$city->city,
			'pop'=>$city->pop,
			"country"=>$city->country
		));
	}

?>