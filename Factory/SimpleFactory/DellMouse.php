<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\SimpleFactory;

include_once 'Mouse.php';

class DellMouse extends Mouse
{
	
	function __construct($brand)
	{
		$this->showMsg($brand);
	}
}