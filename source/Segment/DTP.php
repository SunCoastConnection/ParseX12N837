<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class DTP extends Segment {

	static protected $elementSequence = [
		['name' => 'DTP01', 'required' => true],
		['name' => 'DTP02', 'required' => true],
		['name' => 'DTP03', 'required' => true],
	];

	static protected $elementNames = [
		'DTP01' => 'Date/Time Qualifier',
		'DTP02' => 'Date Time Period Format Qualifier',
		'DTP03' => 'Date Time Period',
	];

}