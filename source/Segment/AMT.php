<?php

namespace SunCoastConnection\ParseX12N837\Segment;

use \SunCoastConnection\ParseX12\Raw\Segment;

class AMT extends Segment {

	static protected $elementSequence = [
		['name' => 'AMT01', 'required' => true],
		['name' => 'AMT02', 'required' => true],
		['name' => 'AMT03', 'required' => false],
	];

	static protected $elementNames = [
		'AMT01' => 'Amount Qualifier Code',
		'AMT02' => 'Monetary Amount',
		'AMT03' => 'Credit/Debit Flag Code',
	];

}