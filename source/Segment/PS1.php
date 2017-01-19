<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class PS1 extends Segment {

	static protected $elementSequence = [
		['name' => 'PS101', 'required' => true],
		['name' => 'PS102', 'required' => true],
		['name' => 'PS103', 'required' => false],
	];

	static protected $elementNames = [
		'PS101' => 'Reference Identification',
		'PS102' => 'Monetary Amount',
		'PS103' => 'State or Province Code',
	];

}