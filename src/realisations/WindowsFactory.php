<?php

namespace App\realisations;

use App\interfaces\ButtonInterface;
use App\interfaces\CheckboxInterface;
use App\interfaces\FactoryInterface;

class WindowsFactory implements FactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new WindowsCheckbox();
    }
}
