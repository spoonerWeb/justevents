<?php
namespace SpoonerWeb\Justevents\Domain\Repository;

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
 * Repository for events
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array(
		'dateFrom' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'timeFrom' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'dateTo' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'timeTo' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findUpcoming() {
		$query = $this->createQuery();
		$query->matching($query->greaterThanOrEqual('dateFrom', time()));

		return $query->execute();
	}

	/**
	 * @param integer $latestLimit
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findLatestUpcoming($latestLimit = 2) {
		$query = $this->createQuery();
		$query->matching($query->greaterThanOrEqual('dateFrom', time()));
		$query->setLimit((int) $latestLimit);

		return $query->execute();
	}

	/**
	 * @param integer $withinDays
	 * @param integer $limit
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findAllWithinDays($withinDays = 30, $limit = 0) {
		$query = $this->createQuery();
		$inWithinDays = strtotime('+ ' . $withinDays . ' days');
		$query->matching(
			$query->logicalAnd(
				$query->logicalOr(
					$query->logicalAnd(
						$query->greaterThanOrEqual('dateFrom', date('Y-m-d')),
						$query->equals('dateTo', 0)
					),
					$query->greaterThanOrEqual('dateTo', date('Y-m-d'))
				),
				$query->lessThan('dateFrom', date('Y-m-d', $inWithinDays))
			)
		);
		if ($limit > 0) {
			$query->setLimit($limit);
		}

		return $query->execute();
	}
}
