<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

abstract class Mouse
{
	protected $msg='Create a mouse::';

	protected function showMsg($brand)
	{
		echo $this->msg.$brand." with factory method\n";
	}
}