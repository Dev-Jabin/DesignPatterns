<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-24
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Mediator;

include_once "ICenterController.php";

use DesignPatterns\Mediator\ICenterController;

class AClient extends Client
{
	// 声明消息
	public function declared($msg,$toClient)
	{
		$this->mediator->sendMsg($msg,$this,$toClient);
	}

	// 收到消息
	public function getMsg($msg)
	{
		echo "$msg";
	}
}