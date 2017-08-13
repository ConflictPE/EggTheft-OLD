<?php

/**
 * EggTheft – EggTheftMatch.php
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
 * Created on 13/8/17 at 7:48 PM
 *
 */

namespace conflict\eggtheft\match;

use core\game\Match;

class EggTheftMatch extends Match {

	/** @var int */
	protected $countdown = self::DEFAULT_COUNTDOWN;

	/** @var int */
	protected $duration = self::DEFAULT_DURATION;

	/** @var int */
	protected $nextDiamondUpgrade = self::DEFAULT_DIAMOND_UPGRADE_INTERVAL;

	/** @var int */
	protected $nexEmeraldUpgrade = self::DEFAULT_EMERALD_UPGRADE_INTERVAL;

	/* Defaults are declared as constants to make changes easier */
	const DEFAULT_COUNTDOWN = 400; // 20 seconds in ticks
	const DEFAULT_DURATION = 18000; // 15 minutes
	const DEFAULT_DIAMOND_UPGRADE_INTERVAL = 2400; // 2 minutes
	const DEFAULT_EMERALD_UPGRADE_INTERVAL = 4800; // 4 minutes

	public function tick($currentTick) {
		$this->checkPlayers();

		$this->lastTick = $currentTick;
	}

}