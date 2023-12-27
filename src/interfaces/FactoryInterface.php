<?php

namespace App\interfaces;

interface FactoryInterface
{
    public function createButton(): ButtonInterface;

    public function createCheckbox(): CheckboxInterface;
}
