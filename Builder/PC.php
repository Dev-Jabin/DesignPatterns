<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder;

abstract class PC
{
	private $parts=[];

	public function setParts($module)
	{
		array_push($this->parts, $module);
	}

	public function getPC()
	{
		return $this->parts;
	}
}