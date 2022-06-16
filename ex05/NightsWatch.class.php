<?php

class NightsWatch {

	private $_fighters = array();

	public function recruit( $target ) {
		$this->_fighters[] = $target;
	}

	public function fight() {
		foreach($this->_fighters as $unit)
		{
			if ($unit instanceof IFighter)
				$unit->fight();
		}
	}
}

?>