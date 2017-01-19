<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class IEA extends Segment {

	static protected $elementSequence = [
		['name' => 'IEA01', 'required' => true],
		['name' => 'IEA02', 'required' => true],
	];

	static protected $elementNames = [
		'IEA01' => 'Number of Included Functional Groups',
		'IEA02' => 'Interchange Control Number',
	];

}