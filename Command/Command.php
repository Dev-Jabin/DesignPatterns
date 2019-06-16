<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-28
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Command;

include_once "TVReceiver.php";
use DesignPatterns\Command\TVReceiver;

abstract class Command
{
	protected $receiver;
	function __construct(TVReceiver $receiver)
	{
		$this->receiver = $receiver;
	}
	abstract protected function execute();
}