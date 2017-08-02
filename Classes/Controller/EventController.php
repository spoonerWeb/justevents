<?php
namespace SpoonerWeb\Justevents\Controller;

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
 * Controller for events
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class EventController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * eventRepository
	 *
	 * @var \SpoonerWeb\Justevents\Domain\Repository\EventRepository
	 * @inject
	 */
	protected $eventRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$events = $this->eventRepository->findUpcoming();
		$this->view->assign('events', $events);
	}

	/**
	 * @return void
	 */
	public function teaserAction() {
		$withinDays = 30;
		if (!empty($this->settings['latestUpcoming']['withinDays'])) {
			$withinDays = (int)$this->settings['latestUpcoming']['withinDays'];
		}

		$limit = 0;
		if (!empty($this->settings['latestUpcoming']['limit'])) {
			$limit = (int)$this->settings['latestUpcoming']['limit'];
		}

		$latestEvents = $this->eventRepository->findAllWithinDays($withinDays, $limit);
		$this->view->assign('events', $latestEvents);
	}

}
