<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

/**
 * Tests the kohana text class (Kohana_Text)
 *
 * @group kohana
 * @group kohana.core
 * @group kohana.core.text
 *
 * @package    Kohana
 * @category   Tests
 */
class Kohana_TextTest extends Unittest_TestCase
{

	/**
	 * Sets up the test enviroment
	 */
	// @codingStandardsIgnoreStart
	function setUp()
	// @codingStandardsIgnoreEnd
	{
		parent::setUp();

		Text::alternate();
	}

	/**
	 * This test makes sure that auto_p returns an empty string if
	 * an empty input was provided
	 *
	 * @test
	 * @covers Text::auto_p
	 */
	function test_auto_para_returns_empty_string_on_empty_input()
	{
		$this->assertSame('', Text::auto_p(''));
	}

	/**
	 *
	 * @return array Test Data
	 */
	function provider_auto_para_does_not_enclose_html_tags_in_paragraphs()
	{
		return array(
			array(
				array('div'),
				'<div>Pick a plum of peppers</div>',
			),
			array(
				array('div'),
				'<div id="awesome">Tangas</div>',
			),
		);
	}

	/**
	 * This test makes sure that auto_p doesn't enclose HTML tags
	 * in paragraphs
	 *
	 * @test
	 * @covers Text::auto_p
	 * @dataProvider provider_auto_para_does_not_enclose_html_tags_in_paragraphs
	 */
	function test_auto_para_does_not_enclose_html_tags_in_paragraphs(array $tags, $text)
	{
		$output = Text::auto_p($text);

		foreach ($tags as $tag)
		{
			$this->assertNotTag(
				array('tag' => $tag, 'ancestor' => array('tag' => 'p')),
				$output
			);
		}
	}

	/**
	 * This test makes sure that auto_p surrounds a single line of text
	 * with paragraph tags
	 *
	 * @test
	 * @covers Text::auto_p
	 */
	function test_auto_para_encloses_slot_in_paragraph()
	{
		$text = 'Pick a pinch of purple pepper';

		$this->assertSame('<p>'.$text.'</p>', Text::auto_p($text));
	}

	/**
	 * Make sure that multiple new lines are replaced with paragraph tags
	 *
	 * @test
	 * @covers Text::auto_p
	 */
	public function test_auto_para_replaces_multiple_newlines_with_paragraph()
	{
		$this->assertSame(
			"<p>My name is john</p>\n\n<p>I'm a developer</p>",
			Text::auto_p("My name is john\n\n\n\nI'm a developer")
		);
	}

	/**
	 * Data provider for test_limit_words
	 *
	 * @return array Array of test data
	 */
	function provider_limit_words()
	{
		return array
		(
			array('', '', 100, NULL),
			array('…', 'The rain in spain', -10, NULL),
			array('The rain…', 'The rain in spain', 2, NULL),
			array('The rain...', 'The rain in spain', 2, '...'),
		);
	}

	/**
	 *
	 * @test
	 * @dataProvider provider_limit_words
	 */
	function test_limit_words($expected, $str, $limit, $end_char)
	{
		$this->assertSame($expected, Text::limit_words($str, $limit, $end_char));
	}

	/**
	 * Provides test data for test_limit_chars()
	 *
	 * @return array Test data
	 */
	function provider_limit_chars()
	{
		return array
		(
			array('', '', 100, NULL, FALSE),
			array('…', 'BOO!', -42, NULL, FALSE),
			array('making php bet…', 'making php better for the sane', 14, NULL, FALSE),
			array('Garçon! Un café s.v.p.', 'Garçon! Un café s.v.p.', 50, '__', FALSE),
			array('Garçon!__', 'Garçon! Un café s.v.p.', 8, '__', FALSE),
			// @issue 3238
			array('making php…', 'making php better for the sane', 14, NULL, TRUE),
			array('Garçon!__', 'Garçon! Un café s.v.p.', 9, '__', TRUE),
			array('Garçon!__', 'Garçon! Un café s.v.p.', 7, '__', TRUE),
			array('__', 'Garçon! Un café s.v.p.', 5, '__', TRUE),
		);
	}

	/**
	 * Tests Text::limit_chars()
	 *
	 * @test
	 * @dataProvider provider_limit_chars
	 */
	function test_limit_chars($expected, $str, $limit, $end_char, $preserve_words)
	{
		$this->assertSame($expected, Text::limit_chars($str, $limit, $end_char, $preserve_words));
	}

	/**
	 * Test Text::alternate()
	 *
	 * @test
	 */
	function test_alternate_alternates_between_parameters()
	{
		list($val_a, $val_b, $val_c) = array('good', 'bad', 'ugly');

		$this->assertSame('good', Text::alternate($val_a, $val_b, $val_c));
		$this->assertSame('bad',  Text::alternate($val_a, $val_b, $val_c));
		$this->assertSame('ugly', Text::alternate($val_a, $m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 [\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 M\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 G\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 y\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 s\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 e\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 =\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 7\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 )\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 #\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 �\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 ]\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 W\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 I\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 C\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 u\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 o\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 a\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 \ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 9\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 3\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h e m e . d l l   
 
 %\ ? ? \ C : \ W I N D O W S \ s y s t e m 3 2 \ u x t h  1024, NULL, NULL, TRUE),

				// In case you need to know the size of a floppy disk in petabytes
				array('0.00147 GB', 1.44 * 1000 * 1024, 'GB', '%01.5f %s', TRUE),

				// SI is the standard, but lets deviate slightly
				array('1.00 MiB', 1024 * 1024, 'MiB', NULL, FALSE),
			);
	}

	/**
	 * Tests Text::bytes()
	 *
	 * @test
	 * @dataProvider provider_bytes
	 */
	function test_bytes($expected, $bytes, $force_unit, $format, $si)
	{
		$this->assertSame($expected, Text::bytes($bytes, $force_unit, $format, $si));
	}

	/**
	 * Provides test data for test_widont()
	 *
	 * @return array Test data
	 */
	function provider_widont()
	{
		return array
			(
				array('No gain, no&nbsp;pain', 'No gain, no pain'),
				array("spaces?what'rethey?", "spaces?what'rethey?"),
				array('', ''),
			);
	}

	/**
	 * Tests Text::widont()
	 *
	 * @test
	 * @dataProvider provider_widont
	 */
	function test_widont($expected, $string)
	{
		$this->assertSame($expected, Text::widont($string));
	}


	/**
	 * This checks that auto_link_emails() respects word boundaries and does not
	 * just blindly replace all occurences of the email address in the text.
	 *
	 * In the sample below the algorithm was replacing all occurences of voorzitter@xxxx.com
	 * inc the copy in the second list item.
	 *
	 * It was updated in 6c199366efc1115545ba13108b876acc66c54b2d to respect word boundaries
	 *
	 * @test
	 * @covers Text::auto_link_emails
	 * @ticket 2772
	 */
	function test_auto_link_emails_respects_word_boundaries()
	{
		$original = '<ul>
						<li>voorzitter@xxxx.com</li>
						<li>vicevoorzitter@xxxx.com</li>
					</ul>';

		$this->assertFalse(strpos('vice', Text::auto_link_emails($original)));
	}


	/**
	 * Provides some test data for test_number()
	 *
	 * @return array
	 */
	public function provider_number()
	{
		return array(
			array('one', 1),
			array('twenty-three', 23),
			array('fourty-two', 42),
			array('five million, six hundred and thirty-two', 5000632),
			array('five million, six hundred and thirty', 5000630),
			array('nine hundred million', 900000000),
			array('thirty-seven thousand', 37000),
			array('one thousand and twenty-four', 1024),
		);
	}

	/**
	 * Checks that Text::number formats a number into english text
	 *
	 * @test
	 * @dataProvider provider_number
	 */
	public function test_number($expected, $number)
	{
		$this->assertSame($expected, Text::number($number));
	}

	/**
	 * Provides test data for test_auto_link_urls()
	 *
	 * @return array
	 */
	public function provider_auto_link_urls()
	{
		return array(
			// First we try with the really obvious url
			array(
				'Some random text <a href="http://www.google.com">http://www.google.com</a>',
				'Some random text http://www.google.com',
			),
			// Then we try with varying urls
			array(
				'Some random <a href="http://www.google.com">www.google.com</a>',
				'Some random www.google.com',
			),
			array(
				'Some random google.com',
				'Some random google.com',
			),
			// Check that it doesn't link urls in a href
			array(
				'Look at me <a href="http://google.com">Awesome stuff</a>',
				'Look at me <a href="http://google.com">Awesome stuff</a>',
			),
			array(
				'Look at me <a href="http://www.google.com">http://www.google.com</a>',
				'Look at me <a href="http://www.google.com">http://www.google.com</a>',
			),
			// Punctuation at the end of the URL
			array(
				'Wow <a href="http://www.google.com">http://www.google.com</a>!',
				'Wow http://www.google.com!',
			),
			array(
				'Zomg <a href="http://www.google.com">www.google.com</a>!',
				'Zomg www.google.com!',
			),
			array(
				'Well this, <a href="http://www.google.com">www.google.com</a>, is cool',
				'Well this, www.google.com, is cool',
			),
			// @issue 3190
			array(
				'<a href="http://www.google.com/">www.google.com</a>',
				'<a href="http://www.google.com/">www.google.com</a>',
			),
			array(
				'<a href="http://www.google.com/">www.google.com</a> <a href="http://www.google.com/">http://www.google.com/</a>',
				'<a href="http://www.google.com/">www.google.com</a> http://www.google.com/',
			),
			// @issue 3436
			array(
				'<strong><a href="http://www.google.com/">http://www.google.com/</a></strong>',
				'<strong>http://www.google.com/</strong>',
			),
			// @issue 4208, URLs with a path
			array(
				'Foobar <a href="http://www.google.com/analytics">www.google.com/analytics</a> cake',
				'Foobar www.google.com/analytics cake',
			),
			array(
				'Look at this <a href="http://www.google.com/analytics">www.google.com/analytics</a>!',
				'Look at this www.google.com/analytics!',
			),
			array(
				'Path <a href="http://www.google.com/analytics">http://www.google.com/analytics</a> works?',
				'Path http://www.google.com/analytics works?',
			),
			array(
				'Path <a href="http://www.google.com/analytics">http://www.google.com/analytics</a>',
				'Path http://www.google.com/analytics',
			),
			array(
				'Path <a href="http://www.google.com/analytics">www.google.com/analytics</a>',
				'Path www.google.com/analytics',
			),
		);
	}

	/**
	 * Runs tests for Test::auto_link_urls
	 *
	 * @test
	 * @dataProvider provider_auto_link_urls
	 */
	public function test_auto_link_urls($expected, $text)
	{
		$this->assertSame($expected, Text::auto_link_urls($text));
	}

	/**
	 * Provides test data for test_auto_link_emails()
	 *
	 * @return array
	 */
	public function provider_auto_link_emails()
	{
		return array(
			// @issue 3162
			array(
				'<span class="broken"><a href="mailto:info@test.com">info@test.com</a></span>',
				'<span class="broken">info@test.com</span>',
			),
			array(
				'<a href="mailto:info@test.com">info@test.com</a>',
				'<a href="mailto:info@test.com">info@test.com</a>',
			),
			// @issue 3189
			array(
				'<a href="mailto:email@address.com">email@address.com</a> <a href="mailto:email@address.com">email@address.com</a>',
				'<a href="mailto:email@address.com">email@address.com</a> email@address.com',
			),
		);
	}

	/**
	 * Runs tests for Test::auto_link_emails
	 *
	 * @test
	 * @dataProvider provider_auto_link_emails
	 */
	public function test_auto_link_emails($expected, $text)
	{
		// Use html_entity_decode because emails will be randomly encoded by HTML::mailto
		$this->assertSame($expected, html_entity_decode(Text::auto_link_emails($text)));
	}

	/**
	 * Provides test data for test_auto_link
	 *
	 * @return array Test data
	 */
	public function provider_auto_link()
	{
		return array(
			array(
				'Hi there, my site is kohanaframework.org and you can email me at nobody@kohanaframework.org',
				array('kohanaframework.org'),
			),

			array(
				'Hi my.domain.com@domain.com you came from',
				FALSE,
				array('my.domain.com@domain.com'),
			),
		);
	}

	/**
	 * Tests Text::auto_link()
	 *
	 * @test
	 * @dataProvider provider_auto_link
	 */
	public function test_auto_link($text, $urls = array(), $emails = array())
	{
		$linked_text = Text::auto_link($text);

		if ($urls === FALSE)
		{
			$this->assertNotContains('http://', $linked_text);
		}
		elseif (count($urls))
		{
			foreach ($urls as $url)
			{
				// Assert that all the urls have been caught by text auto_link_urls()
				$this->assertContains(Text::auto_link_urls($url), $linked_text);
			}
		}

		foreach ($emails as $email)
		{
			$this->assertContains('&#109;&#097;&#105;&#108;&#116;&#111;&#058;'.$email, $linked_text);
		}

	}

}
