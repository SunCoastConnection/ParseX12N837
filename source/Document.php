<?php

namespace SunCoastConnection\ParseX12N837;

use \SunCoastConnection\ParseX12\Section\Root;

// TODO: Cleanup, rename, and replace properties with sub-objects
class Document extends Root {

	static protected $descendantSequence = [
		['name' => 'InterchangeControl', 'required' => true, 'repeat' => 1],
	];

}