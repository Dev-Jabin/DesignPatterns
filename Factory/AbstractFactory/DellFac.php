<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

include_once 'PcFactory.php';
include 'DellMouse.php';
include 'DellKeyboard.php';

class DellFac extends PcFactory
{
	public function createMouse(string $content)
	{
		return new DellMouse($content);
	}

	public function createKeyboard(string $content)
	{
		return new DellKeyboard($content);
	}
}