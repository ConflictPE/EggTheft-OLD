<?php

/**
 * EggTheft – UpgradingGenerator.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 * Created on 13/8/17 at 8:35 PM
 *
 */

namespace conflict\eggtheft\map\generator;

class UpgradingGenerator extends EggTheftGenerator {

	/** @var int[] */
	protected $upgradeIntervals = [];

	public function getUpgradeIntervals() : array {
		return $this->upgradeIntervals;
	}

	public function getNextUpgradeInterval() : int {
		return $this->upgradeIntervals[$this->getTier() - 1] ?? -1;
	}

	public function setUpgradeIntervals(array $values) {
		$this->upgradeIntervals = $values;
	}

}