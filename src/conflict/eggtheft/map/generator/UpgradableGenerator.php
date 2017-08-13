<?php

/**
 * EggTheft – UpgradableGenerator.php
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

class UpgradableGenerator extends EggTheftGenerator {

	/** @var int */
	protected $upgradeCost = 2;

	public function getUpgradeCost() : int {
		return $this->upgradeCost;
	}

	public function setUpgradeCost(int $value = -1) {
		$this->upgradeCost = $value;
	}

	public function getUpgradeTitle() : string {
		if($this->canBeUpgraded()) {
			switch($this->getTier()) {
				default:
					return "Tier " . ($this->getTier() + 1);
			}
		} else {
			return "Generator maxed!";
		}
	}

	public function getUpgradeDescription() : string {
		if($this->canBeUpgraded()) {
			switch($this->getTier()) {
				default:
					return "Upgrade cost: " . $this->upgradeCost;
			}
		} else {
			return "Cannot upgrade generator any further";
		}
	}

}