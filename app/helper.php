<?php

define('CURRENCY', '$'); //Currency Symbol

function sumService($services, $symbol = true){

	if($symbol)
		return CURRENCY.array_sum($services);
	else
		return array_sum($services);
	
}