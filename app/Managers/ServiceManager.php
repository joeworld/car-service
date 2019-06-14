<?php

namespace App\Managers;

use App\Contracts\ServiceInterface;

class ServiceManager {

  public $cost;
 
  public function __construct(ServiceInterface $service, $cost = null)
  {
    
    if($cost === null)
    	$service->setCost();
    else
    	$service->setCost($cost); //setting service cost can as well be dynamic
    
    $this->cost = $service->getServiceCost();
    
  }

}