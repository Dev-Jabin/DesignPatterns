<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-28 18:44:36
 * @Email:  yanjiapeng@dongqiudi.com
 */
include_once "Flight.php";
include_once "Force.php";
include_once "Shot.php";

class SuperModuleFactory
{
	public function makeModule($name, $options)
	{
		switch ($name) {
			case 'Flight':
				return new Flight($options[0], $options[1]);
			case 'Force':
				return new Force($options[0]);
			case 'Shot':
				return new Shot($options[0], $options[1], $options[2]);
			default:
				echo "module name not found\n";
				break;
		}
	}
}