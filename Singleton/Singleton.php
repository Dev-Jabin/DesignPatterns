<?php

/**
 * @Author: Jabin
 * @Date:   2019-05-20
 * @Email:  jpyan2906@gmail.com
 */

namespace DesignPatterns\Singleton;

class Singleton
{
	private static $_instance = null;

	private function __construct()
	{
		# code...
	}

	public function __clone(){
		die('Clone is not allowed.');
	}

	public static function getInstance()
	{
		if (is_null(self::$_instance)) {
			echo "new instance\n";
			self::$_instance = new Singleton();
		}
		return self::$_instance;
	}
}



// $instance1 = Singleton::getInstance();
// $instance2 = Singleton::getInstance();
// $instance3 = Singleton::getInstance();
// $instance4 = Singleton::getInstance();

// var_dump($instance1 === $instance2);
// var_dump($instance2 === $instance3);
// var_dump($instance3 === $instance4);