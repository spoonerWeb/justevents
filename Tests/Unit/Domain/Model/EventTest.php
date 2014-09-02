<?php

namespace SpoonerWeb\Justevents\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \SpoonerWeb\Justevents\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Justevents\Domain\Model\Event
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Justevents\Domain\Model\Event();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateFromReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDateFrom()
		);
	}

	/**
	 * @test
	 */
	public function setDateFromForDateTimeSetsDateFrom() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateFrom($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateFrom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateToReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDateTo()
		);
	}

	/**
	 * @test
	 */
	public function setDateToForDateTimeSetsDateTo() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDateTo($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dateTo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTimeFromReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getTimeFrom()
		);
	}

	/**
	 * @test
	 */
	public function setTimeFromForIntegerSetsTimeFrom() {
		$this->subject->setTimeFrom(12);

		$this->assertAttributeEquals(
			12,
			'timeFrom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTimeToReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getTimeTo()
		);
	}

	/**
	 * @test
	 */
	public function setTimeToForIntegerSetsTimeTo() {
		$this->subject->setTimeTo(12);

		$this->assertAttributeEquals(
			12,
			'timeTo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() {
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueFor() {	}

	/**
	 * @test
	 */
	public function setImageForSetsImage() {	}
}
