<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-29
 * @Email:  jpyan2906@gmail.com
 */

include_once "TravelStrategy.php";

class ConcreteStrategyBus implements TravelStrategy
{
	public function go()
	{
		echo "Travel with Bus".PHP_EOL;
	}
}