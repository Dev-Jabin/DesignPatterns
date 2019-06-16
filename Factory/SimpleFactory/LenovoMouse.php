<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\SimpleFactory;

include_once 'Mouse.php';

class LenovoMouse extends Mouse
{
	
	function __construct($material)
	{
		$this->showMsg($material);
	}
}