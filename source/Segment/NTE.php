<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class NTE extends Segment {

	static protected $elementSequence = [
		['name' => 'NTE01', 'required' => false],
		['name' => 'NTE02', 'required' => true],
	];

	static protected $elementNames = [
		'NTE01' => 'Note Reference Code',
		'NTE02' => 'Description',
	];

}