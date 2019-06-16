<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

abstract class Keyboard
{
	protected $msg='Create a keyboard::';

	protected function showMsg($brand)
	{
		echo $this->msg.$brand." with abstract factory\n";
	}
}