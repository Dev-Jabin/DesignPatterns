<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-13
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Factory\FactoryMethodFactory;

include_once 'Keyboard.php';

class DellKeyboard extends Keyboard
{
	
	function __construct($brand)
	{
		$this->showMsg($brand);
	}
}