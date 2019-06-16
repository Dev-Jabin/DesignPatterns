<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-29
 * @Email:  jpyan2906@gmail.com
 */

include_once "TravelContext.php";
include_once "ConcreteStrategyBicycle.php";
include_once "ConcreteStrategyBus.php";
include_once "ConcreteStrategySubway.php";

class TestStrategy
{
	private $context;
	private $busStrategy;
	private $bicycleStratefy;
	private $subwayStrategy;

	public function __construct()
	{
		$this->busStrategy = new ConcreteStrategyBus();
		$this->bicycleStratefy = new ConcreteStrategyBicycle();
		$this->subwayStrategy = new ConcreteStrategySubway();
	}
	
	public function traWithBus()
	{
		$this->context = new TravelContext($this->busStrategy);
		$this->context->goTravel();
	}

	public function traWithSubway()
	{
		$this->context = new TravelContext($this->subwayStrategy);
		$this->context->goTravel();
	}

	public function traWithBicycle()
	{
		$this->context = new TravelContext($this->bicycleStratefy);
		$this->context->goTravel();
	}
}

$testStrategyObj = new TestStrategy();
$testStrategyObj->traWithBicycle();
$testStrategyObj->traWithSubway();
$testStrategyObj->traWithBus();