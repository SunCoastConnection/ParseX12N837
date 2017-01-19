<?php

namespace SunCoastConnection\ParseX12N837\Loop;

use \SunCoastConnection\ParseX12\Section\Loop;

class Loop2440 extends Loop {

	static protected $headerSequence = [
		['name' => 'LQ', 'required' => false, 'repeat' => 1],
		['name' => 'FRM', 'required' => true, 'repeat' => 99],
	];

}