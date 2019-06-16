<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-29
 * @Email:  jpyan2906@gmail.com
 */

include_once "TravelStrategy.php";

class ConcreteStrategyBicycle implements TravelStrategy
{
	public function go()
	{
		echo "Travel with Bicycle".PHP_EOL;
	}
}