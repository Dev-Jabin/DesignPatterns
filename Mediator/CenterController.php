<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-24
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Mediator;

include_once "ICenterController.php";
include_once "Client.php";

use DesignPatterns\Mediator\ICenterController;
use DesignPatterns\Mediator\Client;

class CenterController implements ICenterController
{
	public function sendMsg($msg,Client $fromClient, Client $toClient)
	{
		$toClient->getMsg($msg);
	}
}