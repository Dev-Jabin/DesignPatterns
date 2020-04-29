<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-29 10:15:42
 * @Email:  yanjiapeng@dongqiudi.com
 */
include_once "Container.php";
include_once "Superman.php";
include_once "Force.php";

class SuperFactory
{
	protected $container;

	public function __construct(Container $con)
	{
		$this->container = $con;
	}

	public function bindModule()
	{
		$this->container->bind('Superman', function($container, $moduleName) {
	    	return new Superman($this->container->make($moduleName));
		});

		$this->container->bind('Force', function($container) {
	    	return new Force;
		});

		$this->container->bind('Flight', function($container) {
	    	return new Flight;
		});
	}

	public function createModule()
	{
		$sMan_1 = $this->container->make('Superman', ['Force']);
		$sMan_2 = $this->container->make('Superman', ['Flight']);
	}
	
}