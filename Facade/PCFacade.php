<?php

/**
 * @Author: Jabin
 * @Date:   2019-06-17
 * @Email:  jpyan2906@gmail.com
 */

include_once "CPUSystem.php";
include_once "DiskSystem.php";
include_once "MemorySystem.php";

class PCFacade
{
	private $CPUSys;
	private $DiskSys;
	private $MemorySys;
	public function __construct()
	{
		$this->CPUSys = new CPUSystem();
		$this->DiskSys = new DiskSystem();
		$this->MemorySys = new MemorySystem();
	}

	public function openPC()
	{
		$this->CPUSys->open();
		$this->MemorySys->open();
		$this->DiskSys->open();
	}

	public function closePC()
	{
		$this->CPUSys->close();
		$this->MemorySys->close();
		$this->DiskSys->close();
	}
}