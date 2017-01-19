<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class LQ extends Segment {

	static protected $elementSequence = [
		['name' => 'LQ01', 'required' => false],
		['name' => 'LQ02', 'required' => false],
	];

	static protected $elementNames = [
		'LQ01' => 'Code List Qualifier Code',
		'LQ02' => 'Industry Code',
	];

}