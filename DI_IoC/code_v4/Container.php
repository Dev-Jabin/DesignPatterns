<?php

/**
 * @Author: Jabin
 * @Date:   2020-04-29 10:05:08
 * @Email:  yanjiapeng@dongqiudi.com
 */
class Container
{
	protected $binds;
	protected $instance;

	public function bind($abstract, $concrete)
	{
		if ($concrete instanceof Closure) {
			$this->binds[$abstract] = $concrete;
		} else {
			$this->instances[$abstract] = $concrete;
		}
	}

	public function make($abstract, $params = [])
	{
		if (isset($this->instances[$abstract])) {
			return $this->instances[$abstract];
		}

		array_unshift($params, $this);
		return call_user_func_array($this->binds[$abstract], $params);
	}
}