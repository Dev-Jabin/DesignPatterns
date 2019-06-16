<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-14
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Builder\Parts;

class Screen
{
	private $screenName = '';

	public function setScreenName($value='')
	{
		$this->screenName = $value;
	}

	public function getScreenName()
	{
		return $this->screenName;
	}
}