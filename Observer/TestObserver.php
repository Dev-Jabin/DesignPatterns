<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-23
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Observer;

include_once "CenterController.php";
include_once "Panel1Observer.php";
include_once "Panel2Observer.php";
include_once "Panel3Observer.php";

use DesignPatterns\Observer\CenterController;
use DesignPatterns\Observer\Panel1Observer;
use DesignPatterns\Observer\Panel2Observer;
use DesignPatterns\Observer\Panel3Observer;

class TestObserver
{
	private $centerController;
	private $panel1Observer;
	private $panel2Observer;
	private $panel3Observer;

	public function __construct()
	{
		$this->centerController = new CenterController();
		$this->panel1Observer = new Panel1Observer();
		$this->panel2Observer = new Panel2Observer();
		$this->panel3Observer = new Panel3Observer();
	}

	public function testObserver()
	{
		// 注册观察者
		$this->centerController->attach($this->panel1Observer);
		$this->centerController->attach($this->panel2Observer);
		$this->centerController->attach($this->panel3Observer);

		$observerCount = $this->centerController->getObservers();
		echo "observer count::$observerCount\n";

		// 更新发布者
		$this->centerController->change(30);

		// 通知更新订阅者
		$this->centerController->notify();

		// 注销观察者
		$this->centerController->detach($this->panel2Observer);

		$observerCount = $this->centerController->getObservers();
		echo "observer count::$observerCount\n";

		// 更新发布者
		$this->centerController->change(20);

		// 通知更新订阅者
		$this->centerController->notify();
	}
}

$testObserverObj = new TestObserver();
$testObserverObj->testObserver();