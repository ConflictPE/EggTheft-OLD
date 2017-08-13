<?php

/**
 * EggTheft – TeamGenerator.php
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
 * Created on 13/8/17 at 9:17 PM
 *
 */

namespace conflict\eggtheft\map\generator\defaults;

use conflict\eggtheft\map\generator\UpgradableGenerator;
use pocketmine\item\Item;

class TeamGenerator extends UpgradableGenerator {

	public function getPossibleDrops() : array {
		return [
			// item id, [tier => spawn interval], max spawn count
			[Item::IRON_INGOT, [-1, 3, 2.5, 2, 1.5, 1], 112],
			[Item::GOLD_INGOT, [-1, 5, 4.5, 3, 2.5, 2], 32]
		];
	}

}