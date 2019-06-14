<?php

namespace App\Adapters;

use App\Contracts\ServiceInterface;

/**
 *  The inpection adapter would implement the service interface
 */

class InspectionAdapter implements ServiceInterface
{

	protected $_cost;

	public function setCost($cost = 50){
		$this->_cost = $cost;
	}

	public function getServiceCost()
	{
		return $this->_cost;
	}

}