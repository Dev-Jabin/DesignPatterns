<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

include 'LenovoFac.php';
include 'DellFac.php';

class TestFac
{
	public function createLenovoMouse()
	{
		$factory = new LenovoFac();
		$saltPie = $factory->createMouse('lenovo');
	}

	public function createDellMouse()
	{
		$factory = new DellFac();
		$sweetPie = $factory->createMouse('dell');
	}
}

$testObj = new TestFac();
$testObj->createLenovoMouse();
$testObj->createDellMouse();

