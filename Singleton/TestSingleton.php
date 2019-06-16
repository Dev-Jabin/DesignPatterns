<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-20
 * @Email:  jpyan2906@gmail.com
 */
namespace DesignPatterns\Singleton;

include "Singleton.php";

use DesignPatterns\Singleton\Singleton;

class TestSingleton
{
	public static function testSingleton()
	{
		$instance = Singleton::getInstance();
		return $instance;
	}
}

$singletonObj1 = new TestSingleton();
$singletonObj2 = new TestSingleton();
$singletonObj3 = new TestSingleton();
$singletonObj4 = new TestSingleton();

$instance1 = $singletonObj1->testSingleton();
$instance2 = $singletonObj2->testSingleton();
$instance3 = $singletonObj3->testSingleton();
$instance4 = $singletonObj4->testSingleton();

var_dump($instance1 === $instance2);
var_dump($instance2 === $instance3);
var_dump($instance3 === $instance4);