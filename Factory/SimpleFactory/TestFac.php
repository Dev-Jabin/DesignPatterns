<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\SimpleFactory;

include("MouseFactory.php");

class TestFac
{
	public function createMouse($material)
	{
		MouseFactory::createMouse($material);
	}
}

$testObj = new TestFac();

$testObj->createMouse("lenovo");
$testObj->createMouse("dell");