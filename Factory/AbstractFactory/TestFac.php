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

	private $lenovoFac = null;
	private $dellFac = null;

	public function __construct()
	{
		$this->lenovoFac = new lenovoFac();
		$this->dellFac = new DellFac();
	}

	public function createLenovoMouse()
	{
		$saltPie = $this->lenovoFac->createMouse('lenovo');
	}

	public function createLenovoKeyboard()
	{
		$saltPie = $this->lenovoFac->createKeyboard('lenovo');
	}

	public function createDellMouse()
	{
		$sweetPie = $this->dellFac->createMouse('dell');
	}

	public function createDellKeyboard()
	{
		$saltPie = $this->dellFac->createKeyboard('dell');
	}
}

$testObj = new TestFac();
$testObj->createLenovoMouse();
$testObj->createLenovoKeyboard();
$testObj->createDellMouse();
$testObj->createDellKeyboard();


