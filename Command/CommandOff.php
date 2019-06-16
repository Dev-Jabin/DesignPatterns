<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-28
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Command;

class CommandOff extends Command
{
	public function execute()
	{
		$this->receiver->actionOff();
	}
}