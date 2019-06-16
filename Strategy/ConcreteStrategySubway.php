<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-29
 * @Email:  jpyan2906@gmail.com
 */

include_once "TravelStrategy.php";

class ConcreteStrategySubway implements TravelStrategy
{
	public function go()
	{
		echo "Travel with Subway".PHP_EOL;
	}
}