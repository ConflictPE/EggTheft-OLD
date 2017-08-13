<?php

/**
 * EggTheft – EggTheftGenerator.php
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
 * Created on 13/8/17 at 8:05 PM
 *
 */

namespace conflict\eggtheft\map\generator;

use conflict\eggtheft\map\Map;
use pocketmine\item\Item;
use pocketmine\math\Vector3;

class EggTheftGenerator {

	/** @var Map */
	private $map;

	/** @var null|Vector3 */
	private $position = null;

	/** @var int */
	private $tier = 0;

	/** @var int */
	private $maxTier = 4;

	public function __construct(Map $map, Vector3 $pos) {
		$this->map = $map;
		$this->position = $pos;
	}

	public function getMap() : Map {
		return $this->map;
	}

	public function getPosition() : Vector3 {
		return $this->position;
	}

	public function getTier() : int {
		return $this->tier;
	}

	public function getMaxTier() : int {
		return $this->maxTier;
	}

	public function setTier(int $value = -1) {
		$this->tier = $value;
	}

	public function setMaxTier(int $value) {
		$this->maxTier = $value;
	}

	public function canBeUpgraded() : bool {
		return $this->tier < $this->maxTier;
	}

	/**
	 * Array of the ids of possible drops
	 *
	 * @return array
	 */
	public function getPossibleDrops() : array {
		return [
			// item id, [tier => spawn interval], max spawn count
			[Item::AIR, -1, 0]
		];
	}

}