<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder\Parts;

class Mouse
{
	private $mouseName = '';
	
	public function setMouseName($value='')
	{
		$this->mouseName = $value;
	}

	public function getMouseName()
	{
		return $this->mouseName;
	}
}