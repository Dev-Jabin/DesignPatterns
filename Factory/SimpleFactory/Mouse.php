<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\SimpleFactory;

abstract class Mouse
{
	private $msg='Create a Mosue::';

	protected function showMsg($brand)
	{
		echo $this->msg.$brand." with simple factory\n";
	}
}