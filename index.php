<?php

/**
 *
 * I used the adapter pattern also referred as the wrapper pattern,
 * I find that wrapper is a more fitting name since it describes clearly what this pattern does;
 * It encapsulates the functionality of a class or object into a class with a common public interfaces.
 *
 * Andela Technical Interview Solution
 *
 * @author   Ojo Oluwaseun Joseph <iamjoestack@gmail.com>
 */

require 'app/bootstrap.php';

use App\Adapters\{InspectionAdapter, OilAdapter, TireAdapter};
use App\Managers\ServiceManager;

// All car service cost can as well be set dynamially by adding it as a second parameter to ServiceManager else it would take the default for this solution

$basicInspection = new ServiceManager(new InspectionAdapter());

$tireRotation = new ServiceManager(new TireAdapter());

$oilChange = new ServiceManager(new OilAdapter());

// Basic Inspection
// Faiq is interested in Basic Inspection;

print(sumService([
	$basicInspection->cost
])
);

// Oil Change
// Eshaan is interested in carrying out Oil Change;
print("\n".sumService([
	$basicInspection->cost,
	$oilChange->cost
])
);

// Tire rotation
// Eshaan is interested in carrying out Tire Rotation;
print("\n".sumService([
	$basicInspection->cost,
	$tireRotation->cost
])
);

// Tire rotation
// Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car;
print("\n".sumService([
	$basicInspection->cost,
	$oilChange->cost,
	$tireRotation->cost
])
);