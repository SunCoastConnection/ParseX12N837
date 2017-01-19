<?php

namespace SunCoastConnection\ParseX12N837\Envelope;

use \SunCoastConnection\ParseX12\Section\Envelope;

class TransactionSet extends Envelope {

	/**
	 * Transaction Set header sequence
	 * @var array
	 */
	static protected $headerSequence = [
		['name' => 'ST', 'required' => true, 'repeat' => 1],
		['name' => 'BHT', 'required' => true, 'repeat' => 1],
		['name' => 'REF', 'required' => false, 'repeat' => 3],
	];

	/**
	 * Transaction Set descendant sequence
	 * @var array
	 */
	static protected $descendantSequence = [
		['name' => 'Loop1000', 'required' => true, 'repeat' => 10],
		['name' => 'Loop2000', 'required' => true, 'repeat' => -1],
	];

	/**
	 * Transaction Set trailer sequence
	 * @var array
	 */
	static protected $trailerSequence = [
		['name' => 'SE', 'required' => true, 'repeat' => 1],
	];

}