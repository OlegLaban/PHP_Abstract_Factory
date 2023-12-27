<?php

namespace App\realisations;

use App\interfaces\CheckboxInterface;

class WindowsCheckbox implements CheckboxInterface
{

    public function paint(): void
    {
        echo 'Windows checkbox';
    }
}
