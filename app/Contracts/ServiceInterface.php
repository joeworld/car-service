<?php

namespace App\Contracts;

//The adapter pattern also referred as the wrapper pattern, I find that wrapper is a more fitting name since it describes clearly what this pattern does; it encapsulates the functionality of a class or object into a class with a common public interfaces.

interface ServiceInterface {

    public function setCost($cost);

    public function getServiceCost();

}