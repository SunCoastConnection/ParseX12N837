<?php

namespace SunCoastConnection\ParseX12N837\Loop;

use \SunCoastConnection\ParseX12\Section\Loop;

class Loop2305 extends Loop {

	static protected $headerSequence = [
		['name' => 'CR7', 'required' => false, 'repeat' => 1],
		['name' => 'HSD', 'required' => false, 'repeat' => 12],
	];

}