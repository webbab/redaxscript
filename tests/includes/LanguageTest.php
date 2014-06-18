<?php

/**
 * Redaxscript Language Test
 *
 * @since 2.2.0
 *
 * @package Redaxscript
 * @category Tests
 * @author Henry Ruhs
 */

class Redaxscript_Language_Test extends PHPUnit_Framework_TestCase
{
	/**
	 * language
	 *
	 * instance of the language class
	 *
	 * @var object
	 */

	protected $_language;

	/**
	 * setUp
	 *
	 * @since 2.2.0
	 */

	protected function setUp()
	{
		$this->_language = Redaxscript_Language::instance();
		$this->_language->init('de');
	}

	/**
	 * tearDown
	 *
	 * @since 2.2.0
	 */

	public function tearDown()
	{
		$this->_language->init('en');
	}

	/**
	 * testGet
	 *
	 * @since 2.2.0
	 */

	public function testGet()
	{
		/* result */

		$result = $this->_language->get('home');

		/* compare */

		$this->assertEquals('Startseite', $result);
	}

	/**
	 * testGetIndex
	 *
	 * @since 2.2.0
	 */

	public function testGetIndex()
	{
		/* result */

		$result = $this->_language->get('name', '_package');

		/* compare */

		$this->assertEquals('Redaxscript', $result);
	}

	/**
	 * testGetAll
	 *
	 * @since 2.2.0
	 */

	public function testGetAll()
	{
		/* result */

		$result = $this->_language->getAll();

		/* compare */

		$this->assertArrayHasKey('home', $result);
	}

	/**
	 * testGetInvalidKey
	 *
	 * @since 2.2.0
	 */

	public function testGetInvalidKey()
	{
		/* result */

		$result = $this->_language->get('invalidKey');

		/* compare */

		$this->assertEquals(null, $result);
	}

	/**
	 * testGetNull
	 *
	 * @since 2.2.0
	 */

	public function testGetNull()
	{
		/* result */

		$result = $this->_language->get();

		/* compare */

		$this->assertEquals(null, $result);
	}

	/**
	 * testReset
	 *
	 * @since 2.2.0
	 */

	public function testReset()
	{
		/* setup */

		$this->_language->reset();

		/* result */

		$result = $this->_language->instance();

		/* compare */

		$this->assertInstanceOf('Redaxscript_Language', $result);
	}
}