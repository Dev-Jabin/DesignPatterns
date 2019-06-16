<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-28
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Command;

include_once "TVReceiver.php";
include_once "RemoteInvoker.php";
include_once "CommandOn.php";
include_once "CommandOff.php";

class TestCommad
{
	private $receiver;
	private $invoker;
	private $commandOn;
	private $commandOff;

	public function __construct()
	{
		$this->receiver = new TVReceiver();
		$this->invoker = new RemoteInvoker();
		$this->commandOn = new CommandOn($this->receiver);
		$this->commandOff = new CommandOff($this->receiver);
	}

	public function testCommadOn()
	{
		$this->invoker->setCommand($this->commandOn);
		$this->invoker->send();
	}

	public function testCommadOff()
	{
		$this->invoker->setCommand($this->commandOff);
		$this->invoker->send();
	}
}

$testCommadObj = new TestCommad();
$testCommadObj->testCommadOn();
$testCommadObj->testCommadOff();
