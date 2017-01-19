<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class GE extends Segment {

	static protected $elementSequence = [
		['name' => 'GE01', 'required' => true],
		['name' => 'GE02', 'required' => true],
	];

	static protected $elementNames = [
		'GE01' => 'Number of Transaction Sets Included',
		'GE02' => 'Group Control Number',
	];

}