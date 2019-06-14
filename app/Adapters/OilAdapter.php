<?php

namespace App\Adapters;

use App\Contracts\ServiceInterface;

/**
 * The oil adapter would adapter to the service interface
 */

class OilAdapter implements ServiceInterface
{
	
	protected $_cost;

	public function setCost($cost = 85){
		$this->_cost = $cost;
	}

	public function getServiceCost()
	{
		return $this->_cost;
	}
	
}