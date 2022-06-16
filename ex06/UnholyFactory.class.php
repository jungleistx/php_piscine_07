<?php

class UnholyFactory {

	public $_actFighters = array();

	public function absorb( $type ) {
		if ($type instanceof Fighter)
		{
			if (array_key_exists($type->name, $this->_actFighters))
			{
				print '(Factory already absorbed a fighter of type ' . $type->name . ')' . PHP_EOL;
			}
			else
			{
				print '(Factory absorbed a fighter of type ' . $type->name . ')' . PHP_EOL;
				$this->_actFighters[$type->name] = $type;
			}
		}
		else
		{
			print '(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL;
		}
	}

	public function fabricate( $type ) {
		if (array_key_exists($type, $this->_actFighters))
		{
			print '(Factory fabricates a fighter of type ' . $type . ')' . PHP_EOL;
			return (clone $this->_actFighters[$type]);
		}
		else
		{
			print '(Factory hasn\'t absorbed any fighter of type ' . $type . ')' . PHP_EOL;
			return null;
		}
	}
}

?>