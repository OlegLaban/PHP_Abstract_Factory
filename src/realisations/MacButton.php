<?php

namespace App\realisations;

use App\interfaces\ButtonInterface;

class MacButton implements ButtonInterface
{
	public function paint(): void
	{
		echo 'Mac button';
	}
}

