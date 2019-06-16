<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-29
 * @Email:  jpyan2906@gmail.com
 */

include_once "TravelStrategy.php";

class TravelContext
{
	private $strategy;

	function __construct(TravelStrategy $travelStrategy)
	{
		$this->strategy = $travelStrategy;
	}

	public function goTravel()
	{
		$this->strategy->go();
	}
}

