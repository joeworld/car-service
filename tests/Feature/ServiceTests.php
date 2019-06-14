<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Adapters\{InspectionAdapter, OilAdapter, TireAdapter};
use App\Managers\ServiceManager;

class ServiceTests extends TestCase {

   public function testBasicInspection()
   {

   	$cost = 50;

    $basicInspection = new ServiceManager(new InspectionAdapter());
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testOilChange()
   {

   	$cost = 85;

    $basicInspection = new ServiceManager(new OilAdapter());
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testTireRotation()
   {

   	$cost = 23.5;

    $basicInspection = new ServiceManager(new TireAdapter());
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testForAllServices()
   {

   	$cost = 50 + 85 + 23.5;
    
    $basicInspection = new ServiceManager(new InspectionAdapter());
    $tireRotation = new ServiceManager(new TireAdapter());
	$oilChange = new ServiceManager(new OilAdapter());

    $this->assertSame($cost, sumService([$basicInspection->cost, $tireRotation->cost, $oilChange->cost], false));

   }

   public function testBasicInspectionCostChange()
   {

   	$cost = 100;

    $basicInspection = new ServiceManager(new InspectionAdapter(), $cost);
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testOilChangeCostChange()
   {

   	$cost = 95;

    $basicInspection = new ServiceManager(new OilAdapter(), $cost);
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testTireRotationCostChange()
   {

   	$cost = 46.10;

    $basicInspection = new ServiceManager(new TireAdapter(), $cost);
    $this->assertSame($cost, sumService([$basicInspection->cost], false));

   }

   public function testForAllServicesCostChange()
   {

   	$cost = 100 + 95 + 46.10;
    
    $basicInspection = new ServiceManager(new InspectionAdapter(), 100);
    $tireRotation = new ServiceManager(new TireAdapter(), 95);
	$oilChange = new ServiceManager(new OilAdapter(), 46.10);

    $this->assertSame($cost, sumService([$basicInspection->cost, $tireRotation->cost, $oilChange->cost], false));

   }

}