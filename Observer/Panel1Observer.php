<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-23
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Observer;

include_once 'IObserver.php';
include_once 'ICenterController.php';

use DesignPatterns\Observer\IObserver;
use DesignPatterns\Observer\ICenterController;

class Panel1Observer implements IObserver
{
	private $name = "panel1Observer";

	public function update(ICenterController $controller)
    {
        $temperature = $controller->getTemperature();
        echo "panel1 temperature changed to::$temperature\n";
    }

    public function getObserverName()
    {
    	return $this->name;
    }
}
