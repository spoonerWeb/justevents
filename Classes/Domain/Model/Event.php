<?php
namespace SpoonerWeb\Justevents\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * dateFrom
	 *
	 * @var \DateTime
	 */
	protected $dateFrom = NULL;

	/**
	 * dateTo
	 *
	 * @var \DateTime
	 */
	protected $dateTo = NULL;

	/**
	 * timeFrom
	 *
	 * @var integer
	 */
	protected $timeFrom = 0;

	/**
	 * timeTo
	 *
	 * @var integer
	 */
	protected $timeTo = 0;

	/**
	 * location
	 *
	 * @var string
	 */
	protected $location = '';

	/**
	 * image
	 *
	 * @var
	 */
	protected $image = NULL;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the dateFrom
	 *
	 * @return \DateTime $dateFrom
	 */
	public function getDateFrom() {
		return $this->dateFrom;
	}

	/**
	 * Sets the dateFrom
	 *
	 * @param \DateTime $dateFrom
	 * @return void
	 */
	public function setDateFrom(\DateTime $dateFrom) {
		$this->dateFrom = $dateFrom;
	}

	/**
	 * Returns the dateTo
	 *
	 * @return \DateTime $dateTo
	 */
	public function getDateTo() {
		return $this->dateTo;
	}

	/**
	 * Sets the dateTo
	 *
	 * @param \DateTime $dateTo
	 * @return void
	 */
	public function setDateTo(\DateTime $dateTo) {
		$this->dateTo = $dateTo;
	}

	/**
	 * Returns the timeFrom
	 *
	 * @return integer $timeFrom
	 */
	public function getTimeFrom() {
		return $this->timeFrom;
	}

	/**
	 * Sets the timeFrom
	 *
	 * @param integer $timeFrom
	 * @return void
	 */
	public function setTimeFrom(integer $timeFrom) {
		$this->timeFrom = $timeFrom;
	}

	/**
	 * Returns the timeTo
	 *
	 * @return integer $timeTo
	 */
	public function getTimeTo() {
		return $this->timeTo;
	}

	/**
	 * Sets the timeTo
	 *
	 * @param integer $timeTo
	 * @return void
	 */
	public function setTimeTo(integer $timeTo) {
		$this->timeTo = $timeTo;
	}

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the image
	 *
	 * @return  $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

}