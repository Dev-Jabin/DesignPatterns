<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-28
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Command;

include_once "Command.php";
use DesignPatterns\Command\Command;

class RemoteInvoker
{
	protected $command;

	public function setCommand(Command $command)
	{
		$this->command = $command;
	}

	public function send()
	{
		$this->command->execute();
	}
}