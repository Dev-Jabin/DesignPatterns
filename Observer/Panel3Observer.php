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

class Panel3Observer implements IObserver
{
	private $name = "panel3Observer";

	public function update(ICenterController $controller)
    {
        $temperature = $controller->getTemperature();
        echo "panel3 temperature changed to::$temperature\n";
    }

    public function getObserverName()
    {
    	return $this->name;
    }
}
