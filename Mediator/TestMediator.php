<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-24
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Mediator;

include_once "CenterController.php";
include_once "AClient.php";
include_once "BClient.php";
include_once "cClient.php";

use DesignPatterns\Mediator\CenterController;
use DesignPatterns\Mediator\AClient;
use DesignPatterns\Mediator\BClient;
use DesignPatterns\Mediator\cClient;

class TestMediator
{
	private $centerController;
	private $aClient;
	private $bClient;
	private $cClient;

	function __construct()
	{
		$this->centerController = new CenterController();
		$this->aClient = new AClient($this->centerController);
		$this->bClient = new BClient($this->centerController);
		$this->cClient = new CClient($this->centerController);
	}

	public function testAc2Bc($msg)
	{
		$this->aClient->declared($msg,$this->bClient);
	}

	public function testAc2Cc($msg)
	{
		$this->aClient->declared($msg,$this->cClient);
	}

	public function testBc2Ac($msg)
	{
		$this->bClient->declared($msg,$this->aClient);
	}
}

$testMediatorObj = new TestMediator();
echo "ACleint => BClient\n";
$testMediatorObj->testAc2Bc("Hi, BClient I'm AClient Nice To Meet You!\n\n");
echo "BCleint => AClient\n";
$testMediatorObj->testBc2Ac("Hi, AClient Nice To Meet You Too!\n\n");
echo "ACleint => CClient\n";
$testMediatorObj->testAc2Cc("Hi, CClient I'm AClient Nice To Meet You!\n\n");
echo "CCleint => AClient\n";
$testMediatorObj->testAc2Cc("Hi, AClient I'm CClient Nice To Meet You!\n");
