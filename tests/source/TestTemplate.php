<?php

namespace SunCoastConnection\ParseX12N837\Tests;

use \SunCoastConnection\ParseX12N837\Template;
use \SunCoastConnection\ParseX12N837\Tests\BaseTestCase;

class TemplateTest extends BaseTestCase {

	protected $Template;

	public function setUp() {
		parent::setUp();

		$this->Template = $this->getMockery(
			Template::class
		)->makePartial();

	}

	public function tearDown() {
		parent::tearDown();

	}

	/**
	 * @covers SunCoastConnection\ParseX12N837\Template::()
	 */
	public function test() {
		$this->markTestIncomplete('Not yet implemented');
	}

}