<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder;

include "Director.php";
include_once "LenovoBuilder.php";
include_once "DellBuilder.php";

class TestBuilder
{

	private $director = null;

	public function __construct()
	{
		$this->director = new Director();
	}

	public function testBuildLenovoPC()
	{
		$lenovoBuilder = new LenovoBuilder();
		$lenovoPC = $this->director->build($lenovoBuilder);
		return $lenovoPC;
	}

	public function testBuildDellPC()
	{
		$dellBuilder = new DellBuilder();
		$dellPC = $this->director->build($dellBuilder);
		return $dellPC;
	}
}


$builderObj = new TestBuilder();

$lenovoPC = $builderObj->testBuildLenovoPC();
var_dump($lenovoPC);

$dellPC = $builderObj->testBuildDellPC();
var_dump($dellPC);
