<?php

namespace App\realisations;

use App\interfaces\ButtonInterface;

class XfceButton implements ButtonInterface
{

    public function paint(): void
    {
        echo 'Xfce button';
    }
}
