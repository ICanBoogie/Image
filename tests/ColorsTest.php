<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie\Tests\Image;

use ICanBoogie\Image;

class ColorTest extends \PHPUnit_Framework_TestCase
{
	public function testRedAsString()
	{
		$red = Image::decode_color('red');

		$this->assertEquals(array(255, 0, 0), $red);
	}

	public function testRedAsNumeric()
	{
		$red = Image::decode_color(0xff0000);

		$this->assertEquals(array(255, 0, 0), $red);
	}

	public function testRedAsArray()
	{
		$red = Image::decode_color(array(255, 0, 0));

		$this->assertEquals(array(255, 0, 0), $red);
	}
}