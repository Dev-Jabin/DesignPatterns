<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

include_once 'PcFactory.php';
include 'LenovoMouse.php';
include 'LenovoKeyboard.php';


class LenovoFac extends PcFactory
{
	public function createMouse(string $content)
	{
		return new LenovoMouse($content);
	}

	public function createKeyboard(string $content)
	{
		return new LenovoKeyboard($content);
	}
}