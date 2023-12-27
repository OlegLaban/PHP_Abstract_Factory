<?php

namespace App\realisations;

use App\interfaces\CheckboxInterface;

class XfceCheckbox implements CheckboxInterface
{

    public function paint(): void
    {
        echo 'Xfce checkbox';
    }
}
