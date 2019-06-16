<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-23
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Observer;

include_once 'IObserver.php';

use DesignPatterns\Observer\IObserver;

interface ICenterController
{
	public function attach(IObserver $observer);
	public function detach(IObserver $observer);
	public function notify();
}