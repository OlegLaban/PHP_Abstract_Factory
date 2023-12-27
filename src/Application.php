<?php

namespace App;

use App\interfaces\FactoryInterface;

class Application
{

    public function run(FactoryInterface $factory): void
    {
        $factory->createButton()->paint();
        echo "\n";
        $factory->createCheckbox()->paint();
        echo "\n";
    }
}
