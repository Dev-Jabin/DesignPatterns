<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */

include_once "PCFacade.php";

class Client
{
	private $PcFacade =null;
	public function __construct()
	{
		$this->PcFacade = new PCFacade();
	}

	//开机
	public function openPC()
	{
		$this->PcFacade->openPC();
	}

	//关机
	public function closePC()
	{
		$this->PcFacade->closePC();
	}
}

$clientObj = new Client();
echo "open PC\n";
$clientObj->openPC();
echo "close PC\n";
$clientObj->closePC();