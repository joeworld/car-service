<?php

namespace App\Adapters;

use App\Contracts\ServiceInterface;

/**
 * The tire adapter would implement the service interface
 */

class TireAdapter implements ServiceInterface
{
	
	protected $_cost;

	public function setCost($cost = 23.5){
		$this->_cost = $cost;
	}

	public function getServiceCost()
	{
		return $this->_cost;
	}
	
}