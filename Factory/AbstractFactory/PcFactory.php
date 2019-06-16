<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

abstract class PcFactory
{
	abstract public function createMouse(string $content);
	abstract public function createKeyboard(string $content);
}
