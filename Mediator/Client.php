<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-24
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Mediator;

include_once "ICenterController.php";

use DesignPatterns\Mediator\ICenterController;

abstract class Client
{
	protected $mediator;
	public function __construct(ICenterController $centerController)
	{
		$this->mediator = $centerController;
	}
}