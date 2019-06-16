<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder\Parts;

class Keyboard
{
	private $kbName = '';

	public function setKbName($value='')
	{
		$this->kbName = $value;
	}

	public function getKbName()
	{
		return $this->kbName;
	}
}