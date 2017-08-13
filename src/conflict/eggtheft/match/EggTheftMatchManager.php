<?php

/**
 * EggTheft – EggTheftMatchManagerhManager.php
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
 * Created on 13/8/17 at 7:47 PM
 *
 */

namespace conflict\eggtheft\match;

use core\game\MatchManager;

class EggTheftMatchManager extends MatchManager {

	/**
	 * This is here purely for the correct return type to aid IDE auto-completion
	 *
	 * @param $id
	 *
	 * @return EggTheftMatch|null
	 */
	public function getMatch($id) {
		return parent::getMatch($id);
	}

}