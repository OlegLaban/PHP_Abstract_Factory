<?php

namespace App\realisations;

use App\interfaces\ButtonInterface;

class WindowsButton implements ButtonInterface
{

    public function paint(): void
    {
        echo 'Windows button';
    }
}
