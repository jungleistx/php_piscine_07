<?php

class Tyrion {

	public function sleepWith( $target) {
		// if ($target instanceof Lannister)
		if ($target instanceof Cersei || $target instanceof Jaime)
			print 'Not even if I\'m drunk !' . PHP_EOL;
		else if ($target instanceof Sansa)
			print 'Let\'s do this.' . PHP_EOL;
	}

}

?>