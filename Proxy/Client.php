<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */

include_once "TrainStationProxy.php";
include_once "TrainStation.php";

class Client
{
	private $proxy;

	public function setProxy($trainStation)
	{
		$this->proxy = new TrainStationProxy($trainStation);
	}

	public function buyTicket()
	{
		$this->proxy->sell();
	}
}

$trainStation = new TrainStation();
$clientObj = new Client();
$clientObj->setProxy($trainStation);
$clientObj->buyTicket();