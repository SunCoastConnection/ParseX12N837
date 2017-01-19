<?php

namespace SunCoastConnection\ParseX12N837\Envelope;

use \SunCoastConnection\ParseX12\Section\Envelope;

class FunctionalGroup extends Envelope {

	/**
	 * Functional Group header sequence
	 * @var array
	 */
	static protected $headerSequence = [
		['name' => 'GS', 'required' => true, 'repeat' => 1],
	];

	/**
	 * Functional Group descendant sequence
	 * @var array
	 */
	static protected $descendantSequence = [
		['name' => 'TransactionSet', 'required' => true, 'repeat' => -1],
	];

	/**
	 * Functional Group trailer sequence
	 * @var array
	 */
	static protected $trailerSequence = [
		['name' => 'GE', 'required' => true, 'repeat' => 1],
	];

}