<?php
namespace SpoonerWeb\Justevents\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Event model
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
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
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @lazy
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
	public function setTimeFrom($timeFrom) {
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
	public function setTimeTo($timeTo) {
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
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		if (!is_object($this->image)){
			return NULL;
		} elseif ($this->image instanceof \TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy) {
			$this->image->_loadRealInstance();
		}
		return $this->image->getOriginalResource();
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

}