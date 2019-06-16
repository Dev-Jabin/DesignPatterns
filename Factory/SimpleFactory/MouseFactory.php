<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\SimpleFactory;

include 'LenovoMouse.php';
include 'DellMouse.php';

class MouseFactory
{
	public static function createMouse($brand)
	{
		if ($brand == "lenovo") {
			return new LenovoMouse($brand);
		}elseif ($brand == "dell") {
			return new DellMouse($brand);
		}else{
			return null;
		}
	}
}