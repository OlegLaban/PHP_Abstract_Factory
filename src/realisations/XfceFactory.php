<?php

namespace App\realisations;

use App\interfaces\ButtonInterface;
use App\interfaces\CheckboxInterface;
use App\interfaces\FactoryInterface;

class XfceFactory implements FactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new XfceButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new XfceCheckbox();
    }
}
