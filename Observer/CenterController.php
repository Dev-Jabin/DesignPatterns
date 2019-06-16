<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-23
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Observer;

include_once 'ICenterController.php';
include_once 'IObserver.php';

use DesignPatterns\Observer\IObserver;
use DesignPatterns\Observer\ICenterController;

class CenterController implements ICenterController
{
	private $observers = array();
	private $temperature = 0;

	public function attach(IObserver $observer)
	{
		if (!in_array($observer, $this->observers)) {
			$this->observers[] = $observer;
			$attachObserverName = $observer->getObserverName();
			echo "add observer name::$attachObserverName\n";
		}
		// echo "observer count::".count($this->observers)."\n";
	}

	public function detach(IObserver $observer)
	{
		$index =  array_search($observer, $this->observers);
		if ($index !== false) {
			$detachObserverName = $observer->getObserverName();
			echo "deatch observer name::$detachObserverName\n";
			unset($this->observers[$index]);
		}
	}

	public function notify()
	{
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

	public function change($temperature)
	{
		$this->temperature = $temperature;
	}

	public function getTemperature()
	{
		return $this->temperature;
	}

	public function getObservers()
	{
		return count($this->observers);
	}
}