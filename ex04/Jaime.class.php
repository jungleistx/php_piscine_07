<?php

class Jaime {

	public function sleepWith( $target ) {
		if ($target instanceof Cersei)
			print 'With pleasure, but only in a tower in Winterfell, then.' . PHP_EOL;
		else if ($target instanceof Sansa)
			print 'Let\'s do this.' . PHP_EOL;
		else if ($target instanceof Tyrion)
			print 'Not even if I\'m drunk !' . PHP_EOL;
	}
}

?>