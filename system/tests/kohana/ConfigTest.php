<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

/**
 * Tests the Config lib that's shipped with kohana
 *
 * @group kohana
 * @group kohana.core
 * @group kohana.core.config
 *
 * @package    Kohana
 * @category   Tests
 * @author     Kohana Team
 * @author     Jeremy Bush <contractfrombelow@gmail.com>
 * @author     Matt Button <matthew@sigswitch.com>
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Kohana_ConfigTest extends Unittest_TestCase
{

	/**
	 * When a config object is initially created there should be
	 * no readers attached
	 *
	 * @test
	 * @covers Config
	 */
	public function test_initially_there_are_no_sources()
	{
		$config = new Config;

		$this->assertAttributeSame(array(), '_sources', $config);
	}

	/**
	 * Test that calling attach() on a kohana config object
	 * adds the specified reader to the config object
	 *
	 * @test
	 * @covers Config::attach
	 */
	public function test_attach_adds_reader_and_returns_this()
	{
		$config = new Config;
		$reader = $this->getMock('Kohana_Config_Reader');

		$this->assertSame($config, $config->attach($reader));

		$this->assertAttributeContains($reader, '_sources', $config);
	}

	/**
	 * By default (or by passing TRUE as the second parameter) the config object
	 * should prepend the reader to the front of the readers queue
	 *
	 * @test
	 * @covers Config::attach
	 */
	public function test_attach_adds_reader_to_front_of_queue()
	{
		$config  = new Config;

		$reader1 = $this->getMock('Kohana_Config_Reader');
		$reader2 = $this->getMock('Kohana_Config_Reader');

		$config->attach($reader1);
		$config->attach($reader2);

		// Rather than do two assertContains we'll do an assertSame to assert
		// the order of the readers
		$this->assertAttributeSame(array($reader2, $reader1), '_sources', $config);

		// Now we test using the second parameter
		$config = new Config;

		$config->attach($reader1);
		$config->attach($reader2, TRUE);

		$this->assertAttributeSame(array($reader2, $reader1), '_sources', $config);
	}

	/**
	 * Test that attaching a new reader (and passing FALSE as second param) causes
	 * phpunit to append the reader rather than prepend
	 *
	 * @test
	 * @covers Config::attach
	 */
	public function test_attach_can_add_reader_to_end_of_queue()
	{
		$config  = new Config;
		$reader1 = $this->getMock('Kohana_Config_Reader');
		$reader2 = $this->getMock('Kohana_Config_Reader');

		$config->attach($reader1);
		$config->attach($reader2, FALSE);

		$this->assertAttributeSame(array($reader1, $reader2), '_sources', $config);
	}

	/**
	 * Calling detach() on a config object should remove it from the queue of readers
	 *
	 * @test
	 * @covers Config::detach
	 */
	public function test_detach_removes_reader_and_returns_this()
	{
		$config  = new Config;

		// Due to the way phpunit mock generator works if you try and mock a class
		// that has already been used then it just re-uses the first's name

		// To get around this we have to specify a totally random name for the second mock object
		$reader1 = $this->getMock('Kohana_Config_Reader');
		$reader2 = $this->getMock('Kohana_Config_Reader', array(), array(), 'MY_AWESOME_READER');

		$config->attach($reader1);
		$config->attach($reader2);

		$this->assertSame($config, $config->detach($reader1));

		$this->assertAttributeNotContains($reader1, '_sources', $config);
		$this->assertAttributeContains($reader2, '_sources', $config);

		$this->assertSame($config, $config->detach($reader2));

		$this->assertAttributeNotContains($reader2, '_sources', $config);
	}

	/**
	 * detach() should return $this even if the specified reader does not exist
	 *
	 * @test
	 * @covers Config::detach
	 */
	public function test_detach_returns_this_even_when_reader_dnx()
	{
		$config = new Config;
		$reader = $this->getMock('Kohana_Config_Reader');

		$this->assertSame($config, $config->detach($reader));
	}

	/**
	 * If we request a config variable with a dot path then
	 * Config::load() should load the group and return the requested variable
	 *
	 * @te
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 _\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 Q\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 K\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 }\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 w\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 i\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 c\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 ;\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 -\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 '\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 [\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 M\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 G\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 y\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 s\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 e\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 =\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 7\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 )\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 #\ ? ? \ 
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 _\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 Q\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 K\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 }\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 w\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 i\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 c\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 ;\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 -\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 '\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O 