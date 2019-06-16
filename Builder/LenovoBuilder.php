<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder;

include "LenovoPC.php";

class LenovoBuilder implements BuilderInterface
{
	private $lenovoPc = null;

	function __construct()
	{
		$this->lenovoPc = new LenovoPC();
	}

	public function createMouse()
	{
		$this->lenovoPc->setParts("Lenovo Mouse");
	}

	public function createKeyboard()
	{
		$this->lenovoPc->setParts("Lenovo Keyboard");
	}

	public function createScreen()
	{
		$this->lenovoPc->setParts("Lenovo Screen");
	}

	public function getPC()
	{
		return $this->lenovoPc->getPC();
	}
}