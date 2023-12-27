<?php

namespace App\realisations;

use App\interfaces\CheckboxInterface;

class MacCheckbox implements CheckboxInterface
{
	public function paint(): void
	{
		echo 'Mac checkbox';
	}
}
