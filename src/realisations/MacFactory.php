<?php

namespace App\realisations;

use App\interfaces\FactoryInterface;
use App\interfaces\ButtonInterface;
use App\interfaces\CheckboxInterface;

class MacFactory implements FactoryInterface 
{

    public function createButton(): ButtonInterface 
    {
        return new MacButton();
    }

    public function createCheckbox(): CheckboxInterface 
    {
        return new MacCheckbox();
    }
}
