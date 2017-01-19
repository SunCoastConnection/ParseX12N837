<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class LX extends Segment {

	static protected $elementSequence = [
		['name' => 'LX01', 'required' => true],
	];

	static protected $elementNames = [
		'LX01' => 'Assigned Number',
	];

}