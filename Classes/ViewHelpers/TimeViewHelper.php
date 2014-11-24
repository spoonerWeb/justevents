<?php
namespace SpoonerWeb\Justevents\ViewHelpers;

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

class TimeViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerArgument('onlyHours', 'boolean', 'Returns only the hours');
	}

	/**
	 * @return string
	 */
	public function render() {
		$secondsSinceMidnight = (int) $this->renderChildren();

		if (!$secondsSinceMidnight) {
			return '';
		}

		$hours = (int) ($secondsSinceMidnight / 3600);
		$minutes = (int) ($secondsSinceMidnight % 3600 / 60);

		if ($hours < 10) {
			$hours = '0' . $hours;
		}
		if ($minutes < 10) {
			$minutes = '0' . $minutes;
		}

		if ($this->hasArgument('onlyHours') && $this->arguments['onlyHours'] === TRUE) {
			return $hours;
		}

		return $hours . ':' . $minutes;
	}
}