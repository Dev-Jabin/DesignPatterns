<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-23
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Observer;

include_once 'ICenterController.php';

use DesignPatterns\Observer\ICenterController;

interface IObserver
{
	public function update(ICenterController $controller);
}