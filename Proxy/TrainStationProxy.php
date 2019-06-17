<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */

include_once "ITicketSubject.php";
include_once "TrainStation.php";

class TrainStationProxy implements ITicketSubject
{
	private $trainStation;
	public function __construct($trainStation)
	{
		$this->trainStation = $trainStation;
	}
	public function sell()
	{
		echo "welcome to trainstation proxy\n";
		$this->trainStation->sell();
		echo "handling fee please\n";
	}
}