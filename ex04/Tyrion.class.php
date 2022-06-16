<?php

class Tyrion extends Lannister {

	public function sleepWith( $target) {
		if ($target instanceof Lannister)
			print 'Not even if I\'m drunk !' . PHP_EOL;
		else if ($target instanceof Sansa)
			print 'Let\'s do this.' . PHP_EOL;
	}

}

?>